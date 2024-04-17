<?php

namespace App\Http\Controllers;

use App\Models\Doctors;
use App\Models\Prompt;
use App\Models\User;
use GeminiAPI\Client;
use GeminiAPI\Resources\Parts\TextPart;

use Illuminate\Http\Request;
use Gemini\Laravel\Facades\Gemini;

use Google\Service\Calendar;
use Google\Service\Calendar\Event as Google_Service_Calendar_Event;;

use Google\Client as GoogleClient;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function showHospitalUserProfile()
    {
        return view('hospital/user-profile');
    }

    public function showHospitalSettings()
    {
        return view('hospital/settings');
    }

    public function showHospitalSettingsAccountLog()
    {
        return view('hospital/settings-account-log');
    }

    public function showHospitalDoctorNurseAdd()
    {
        return view('hospital/doctor-nurse-add');
    }

    public function showHospitalInvoiceDetails()
    {
        return view('hospital/invoice-details');
    }

    public function showHospitalInvoiceList()
    {
        return view('hospital/invoice-list');
    }

    public function showHospitalInvoicePrint()
    {
        return view('hospital/invoice-print');
    }

    public function showHospitalPatientAdd()
    {
        return view('hospital/patient-add');
    }

    public function showHospitalPatientProfile()
    {
        return view('hospital/patient-profile');
    }

    public function showHospitalSettingsMember()
    {
        return view('hospital/settings-member');
    }

    public function showHospitalSettingsEmail()
    {
        return view('hospital/settings-email');
    }

    public function showHospitalSettingsSecurity()
    {
        return view('hospital/settings-security');
    }

    public function showHospitalIndex()
    {
        return view('hospital/index');
    }

    public function showHospitalAppointment()
    {
        // gettign the the doctors and user (the doctor has a foregin key of users)
        $doctors = Doctors::with('user')->get();


        return view('hospital/appointment', compact('doctors'));
    }

    public function showHospitalPatientList()
    {
        return view('hospital/patient-list');
    }

    public function showHospitalDoctorNurseList()
    {
        return view('hospital/doctor-nurse-list');
    }

    public function showHospitalIncomeList()
    {
        return view('hospital/income-list');
    }

    public function showHospitalExpenseList()
    {
        return view('hospital/expense-list');
    }

    public function showHospitalBirthReport()
    {
        return view('hospital/birth-report');
    }

    public function showHospitalBloodBank()
    {
        return view('hospital/blood-bank');
    }

    public function showHospitalInventoryItems()
    {
        return view('hospital/inventory-items');
    }

    public function showHospitalBedGroup()
    {
        return view('hospital/bed-group');
    }

    public function showHospitalBedAllotment()
    {
        return view('hospital/bed-allotment');
    }

    public function showHospitalDepartment()
    {
        return view('hospital/department');
    }

    public function showHospitalDeathReport()
    {
        return view('hospital/death-report');
    }
    
    public function geminiChatBot(Request $request)
    {

        $prompts = Prompt::where('user_id', 1)->pluck('prompt');
        $reponses = Prompt::where('user_id', 1)->pluck('response');

        $text = $request->prompt;
        $userAuth = auth()->user();
        $user = User::find($userAuth->id);
        $prompts = Prompt::where('user_id', $user->id)->pluck('prompt');
        $reponses = Prompt::where('user_id', $user->id)->pluck('response');

        $reponseHistory = "you are hplus, a healthcare assitance and you provide healthcare advice but if it's somthing hard you tell him to book a meeting with our doctos, this is your previous reponse history:" . implode(" ", $reponses->toArray()) . " If user wants to book a meeting , you tell him that meeting was booked successfully and you provided the date and time. and you tell him that he will recieve an email once the booking is confirmed by the doctor, example : I have booked you another appointment for 2024-04-22, Always specify the exact date and avoid using relative terms such as tomorrow" . "today is : " . date("Y-m-d");
        $Newtext = "history:" . implode(" ", $prompts->toArray()) . $reponseHistory . "Prompt:" . $text . "Note : you are a doctor assitant that follows instructions and decides either the user will book an appointment wiht our doctors or if he is okay and just need not to be scared ,only repond the the Prompt and use history if user asks you about somthing you don't know. Remember that you always say when you book an appointment : I have booked you another appointment for (and then you specify the exact date)";
        $client = new Client(getenv('GEMINI_API_KEY'));
        $response = $client->geminiPro()->generateContent(
            new TextPart($Newtext)
        );

        $pattern = '/(\d{4}-\d{2}-\d{2})/';

        if (strpos($response->text(), 'I have booked') !== false) {
            $calendarClient = new GoogleClient();
            $calendarClient->setClientId($_ENV['GOOGLE_CLIENT_ID']);
            $calendarClient->setClientSecret($_ENV['GOOGLE_CLIENT_SECRET']);
            $calendarClient->setAccessToken($user->token);
            if ($calendarClient->isAccessTokenExpired()) {
                if ($user->refreshToken) {
                    $calendarClient->fetchAccessTokenWithRefreshToken($user->refreshToken);
                    $user->token = $calendarClient->getAccessToken();
                    $user->save();
                } else {
                    return redirect('/auth/google/redirect');
                }
            }
            
            $calendarService = new Calendar($calendarClient);

            $eventTitle = 'it worked';
            $eventDescription = 'This is a static event for testing purposes.';
            
            if (preg_match($pattern, $response->text(), $matches)) {

                $date = $matches[1];
                $startDate = $date . 'T00:00:00-07:00'; // Set the start time to 00:00:00 and time zone offset to -07:00 (America/Los_Angeles)
                $endDate = date('Y-m-d\TH:i:s-07:00', strtotime($startDate . ' +1 day')); // Add +1 day and use the same time zone offset
               
              

                $event = new Google_Service_Calendar_Event([
                    'summary' => $eventTitle,
                    'description' => $eventDescription,
                    'start' => [
                        'dateTime' => $startDate,
                        'timeZone' => 'America/Los_Angeles',
                    ],
                    'end' => [
                        'dateTime' => $endDate,
                        'timeZone' => 'America/Los_Angeles',
                    ],
                ]);
                $calendarEvent = $calendarService->events->insert('primary', $event);
            } else {
                dd($matches, $response->text(), $pattern);
            }
        }

        $result = $user->prompts()->create([
            'prompt' => $text,
            'response' => $response->text()
        ]);
        return redirect()->back();
    }
    public function ShowHospitalChat()
    {
        $userId = auth()->user()->id;
        $prompts = Prompt::where('user_id', $userId)->get();
        return view('hospital/chat', compact('prompts'));
    }
}
