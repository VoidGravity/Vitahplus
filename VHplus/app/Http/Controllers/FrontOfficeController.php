<?php

namespace App\Http\Controllers;


use App\Models\Appointment;
use App\Models\Doctors;
use App\Models\Prompt;
use App\Models\User;
use GeminiAPI\Client;
use GeminiAPI\Resources\Parts\TextPart;

use Illuminate\Http\Request;
use Google\Service\Calendar;
use Google\Service\Calendar\Event as Google_Service_Calendar_Event;;

use Google\Client as GoogleClient;

class FrontOfficeController extends Controller
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
        //
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

    public function showFrontOfficeIndex()
    {
        $doctors = Doctors::all();
        return view('frontOffice/index', compact('doctors'));
    }

    public function showFrontOfficeAbout()
    {
        return view('frontOffice/about');
    }

    public function showFrontOfficeService()
    {
        return view('frontOffice/service');
    }

    public function showFrontOfficePrice()
    {
        return view('frontOffice/price');
    }

    public function showFrontOfficeTeam()
    {
        return view('frontOffice/team');
    }

    public function showFrontOfficeTestimonial()
    {
        return view('frontOffice/testimonial');
    }

    public function showFrontOfficeAppointment()
    {
        $userId = auth()->user()->id;
        $prompts = Prompt::where('user_id', $userId)->get();
        return view('frontOffice/appointment', compact('prompts'));
    }

    public function showFrontOfficeContact()
    {
        return view('frontOffice/contact');
    }
    public function storeAppointment(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required',
        //     'phone' => 'required',
        //     'doctor' => 'required',
        //     'date' => 'required',
        //     'time' => 'required',
        //     'message' => 'required',
        // ]);
        // dd(auth()->user());

        $Appointment = Appointment::create([
            'appointment_date' => $request->date,
            'Note' => $request->note,
            'status' => 'pending',
            'patient_id' => auth()->user()->id,
        ]);
        $Appointment->save();


        return redirect()->route('frontOffice/index')
            ->with('success', 'Appointment created successfully.');
    }
    public function ShowFrontChat()
    {
        $userId = auth()->user()->id;
        $prompts = Prompt::where('user_id', $userId)->get();
        return view('hospital/chat', compact('prompts'));
    }
    public function geminiChatBot(Request $request)
    {
        $userAuth = auth()->user();
        $user = User::find($userAuth->id);

        $text = $request->prompt;
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
            $appointment = new Appointment();
            $appointment->patient_id = $user->id;
            // $appointment->name = $user->name;

            $appointment->appointment_date = $startDate;
            $appointment->status = 'pending';
            if ($appointment->save()) {
                $result = $user->prompts()->create([
                    'prompt' => $text,
                    'response' => $response->text()
                ]);
                return redirect()->back()->with('success', 'Appointment booked successfully');
            } else {
                return redirect()->back()->with('error', 'Appointment not booked');
            }
        }

        $result = $user->prompts()->create([
            'prompt' => $text,
            'response' => $response->text()
        ]);

        return redirect()->back()->with('success', 'Prompt generated successfully');
    }
}
