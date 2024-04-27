<?php

namespace App\Http\Controllers;

use App\Mail\MailNotify;
use App\Models\Appointment;
use App\Models\BirthReport;
use App\Models\BloodBank;
use App\Models\Department;
use App\Models\Doctors;
use App\Models\InventoryItemReport;
use App\Models\MedecineCategory;
use App\Models\Prompt;
use App\Models\Speciality;
use App\Models\User;
use GeminiAPI\Client;
use GeminiAPI\Resources\Parts\TextPart;

use Illuminate\Http\Request;
use Gemini\Laravel\Facades\Gemini;

use Google\Service\Calendar;
use Google\Service\Calendar\Event as Google_Service_Calendar_Event;;

use Google\Client as GoogleClient;
use Illuminate\Support\Facades\Mail;

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
        // storing the stuff in the database
        $department = new Department();
        $department->name = $request->name;
        $department->description = $request->description;
        $department->status = $request->status;
        $department->save();
        // showing a flash message 
        return redirect()->back()->with('success', 'Department created successfully');
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
    public function update(Request $request)
    {
        // validation 
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'status' => 'required'
        ]);

        $department = Department::find($request->id);
        if (!$department) {
            return redirect()->back()->with('error', 'Department not found');
        }

        // update the department attributes
        $department->name = $request->name;
        $department->description = $request->description;
        $department->status = $request->status;
        $department->save();

        return redirect()->back()->with('success', 'Department updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {


        $department = Department::find($id);
        if (!$department) {
            return redirect()->back()->with('error', 'Department not found');
        }
        $department->delete();
        return redirect()->back()->with('success', 'Department deleted successfully');
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
        // departments
        $departments = Department::all();
        $speciality = Speciality::all();

        return view('hospital/doctor-nurse-add', compact('departments', 'speciality'));
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

    public function showHospitalPatientProfile(Request $request)
    {
        $id = $request->query('id');
        $patient = User::find($id);

        return view('hospital/patient-profile', compact('patient'));
    }


    public function showHospitalSettingsMember()
    {
        $doctors = Doctors::all();
        return view('hospital/settings-member', compact('doctors'));
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
        $appointments = Appointment::all();

        return view('hospital/appointment', compact('doctors', 'appointments'));
    }

    public function showHospitalPatientList()
    {
        $Users = User::all();
        return view('hospital/patient-list', compact('Users'));
    }

    public function showHospitalDoctorNurseList()
    {
        $doctorNurse = Doctors::all();
        $departments = Department::all();
        $speciality = Speciality::all();
        return view('hospital/doctor-nurse-list', compact('doctorNurse', 'departments', 'speciality'));
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
        $birthReports = BirthReport::all();
        return view('hospital/birth-report', compact('birthReports'));
    }

    public function showHospitalBloodBank()
    {
        $blood_banks = BloodBank::with('user')->get();
        return view('hospital/blood-bank', compact('blood_banks'));
    }

    public function showHospitalInventoryItems()
    {
        $inventory = InventoryItemReport::all();
        $category = MedecineCategory::all();
        return view('hospital/inventory-items', compact('inventory', 'category'));
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
        // showing departments 
        $departments = Department::all();
        return view('hospital/department', compact('departments'));
    }

    public function showHospitalDeathReport()
    {
        return view('hospital/death-report');
    }

    public function geminiChatBot(Request $request)
    {
        $userAuth = auth()->user();
        $user = User::find($userAuth->id);

        $text = $request->prompt;
        $prompts = Prompt::where('user_id', $user->id)->pluck('prompt');
        $reponses = Prompt::where('user_id', $user->id)->pluck('response');
        // data 
        $birthReports = BirthReport::all();
        $blood_banks = BloodBank::all();
        $inventory = InventoryItemReport::all();
        $category = MedecineCategory::all();
        $departments = Department::all();
        $speciality = Speciality::all();
        $doctors = Doctors::all();
        $Users = User::all();
        // making all the retrives data into one called data
        $data = [
            'birthReports' => $birthReports,
            'blood_banks' => $blood_banks,
            'inventory' => $inventory,
            'category' => $category,
            'departments' => $departments,
            'speciality' => $speciality,
            'doctors' => $doctors,
            'Users' => $Users
        ];
        // making data into a string 
        $dataString = implode(" ", $data);
        
        $reponseHistory = "you are hplus, a healthcare assitance for an hospital managment system, you provide the doctors with insights about the hospital data, this is your previous reponse history:" . implode(" ", $reponses->toArray()) . " today is : " . date("Y-m-d");
        $Newtext = "history:" . implode(" ", $prompts->toArray()) . $reponseHistory . "Prompt:" . $text . "Note : you are a hospital management sytem AI assitant that follows instructions by repoinding to the last user Prompt and you provides the doctor with the following data in a list , you can also use Id's and foreign keys and joins to filter specific information; here is all of the data : ".$dataString;

        $client = new Client(getenv('GEMINI_API_KEY'));
        $response = $client->geminiPro()->generateContent(
            new TextPart($Newtext)
        );
        $pattern = '/(\d{4}-\d{2}-\d{2})/';

        

        $result = $user->prompts()->create([
            'prompt' => $text,
            'response' => $response->text()
        ]);

        return redirect()->back()->with('success', 'Prompt generated successfully');    

       
    }
    public function ShowHospitalChat()
    {
        $userId = auth()->user()->id;
        $prompts = Prompt::where('user_id', $userId)->get();
        return view('hospital/chat', compact('prompts'));
    }
    public function storeDoctore(Request $request)
    {

        $doctor = new Doctors();
        $doctor->rank = $request->rank;
        $doctor->salary = $request->salary;
        $doctor->Address = $request->Address;
        $doctor->speciality_id = $request->speciality_id;
        $doctor->department_id = $request->department_id;
        $user = User::where('email', $request->UserEmail)->first();
        if (!$user) {
            return redirect()->back()->with('error', 'User not found');
        }





        if ($request->hasFile('Doctor_image')) {
            $image = $request->file('Doctor_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $doctor->Doctor_image = $imageName;
        }

        if ($request->hasFile('national_id')) {
            $nationalIdImage = $request->file('national_id');
            $nationalIdImageName = time() . '_national_id.' . $nationalIdImage->getClientOriginalExtension();
            $nationalIdImage->move(public_path('images'), $nationalIdImageName);
            $doctor->national_id = $nationalIdImageName;
        }

        if ($request->hasFile('certificate')) {
            $certificateImage = $request->file('certificate');
            $certificateImageName = time() . '_certificate.' . $certificateImage->getClientOriginalExtension();
            $certificateImage->move(public_path('images'), $certificateImageName);
            $doctor->certificate = $certificateImageName;
        }
        $doctor->status = $request->status;
        $doctor->save();
        $user->doctors_id = $doctor->id;
        $user->save();

        return redirect()->back()->with('success', 'Doctor added successfully');
    }
    public function updateDoctor(Request $request)
    {
        $doctor = Doctors::findOrFail($request->id);

        $data = $request->only(['rank', 'salary', 'Address']);
        if ($request->filled('speciality_id')) {
            $data['speciality_id'] = $request->speciality_id;
        }

        if ($request->filled('department_id')) {
            $data['department_id'] = $request->department_id;
        }
        if ($request->filled('gender')) {
            $data['gender'] = $request->gender;
        }
        if ($request->filled('status')) {
            $data['status'] = $request->status;
        }

        if ($request->hasFile('Doctor_image')) {
            $image = $request->file('Doctor_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $data['Doctor_image'] = $imageName;
        }

        if ($request->hasFile('national_id')) {
            $nationalIdImage = $request->file('national_id');
            $nationalIdImageName = time() . '_national_id.' . $nationalIdImage->getClientOriginalExtension();
            $nationalIdImage->move(public_path('images'), $nationalIdImageName);
            $data['national_id'] = $nationalIdImageName;
        }

        if ($request->hasFile('certificate')) {
            $certificateImage = $request->file('certificate');
            $certificateImageName = time() . '_certificate.' . $certificateImage->getClientOriginalExtension();
            $certificateImage->move(public_path('images'), $certificateImageName);
            $data['certificate'] = $certificateImageName;
        }

        $doctor->update($data);

        $user = User::where('email', $request->UserEmail)->first();

        if ($user) {
            $user->doctors_id = $doctor->id;
            $user->save();
        }

        return redirect()->back()->with('success', 'Doctor updated successfully');
    }
    // potention replaced code : 
    // public function updateDoctor(Request $request)
    // {
    //     $doctor = Doctors::findOrFail($request->id);

    //     $data = $request->only(['rank', 'salary', 'Address']);

    //     $data = $request->merge($data, [
    //         'speciality_id' => $request->filled('speciality_id') ? $request->speciality_id : null,
    //         'department_id' => $request->filled('department_id') ? $request->department_id : null,
    //         'gender' => $request->filled('gender') ? $request->gender : null,
    //         'status' => $request->filled('status') ? $request->status : null,
    //     ]);

    //     $data = $request->whenPresent('Doctor_image', function ($image) use ($data) {
    //         $imageName = time() . '.' . $image->getClientOriginalExtension();
    //         $image->move(public_path('images'), $imageName);
    //         $data['Doctor_image'] = $imageName;
    //         return $data;
    //     });

    //     $data = $request->whenPresent('national_id', function ($nationalIdImage) use ($data) {
    //         $nationalIdImageName = time() . '_national_id.' . $nationalIdImage->getClientOriginalExtension();
    //         $nationalIdImage->move(public_path('images'), $nationalIdImageName);
    //         $data['national_id'] = $nationalIdImageName;
    //         return $data;
    //     });

    //     $data = $request->whenPresent('certificate', function ($certificateImage) use ($data) {
    //         $certificateImageName = time() . '_certificate.' . $certificateImage->getClientOriginalExtension();
    //         $certificateImage->move(public_path('images'), $certificateImageName);
    //         $data['certificate'] = $certificateImageName;
    //         return $data;
    //     });

    //     $doctor->update($data);

    //     $user = User::where('email', $request->UserEmail)->first();

    //     if ($user) {
    //         $user->doctors_id = $doctor->id;
    //         $user->save();
    //     }

    //     return redirect()->back()->with('success', 'Doctor updated successfully');
    // }
    public function destroyDoctor(string $id)
    {
        $doctor = Doctors::find($id);
        if (!$doctor) {
            return redirect()->back()->with('error', 'Doctor not found');
        }
        $doctor->delete();
        return redirect()->back()->with('success', 'Doctor deleted successfully');
    }
    public function storeUser(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if ($user) {
            $user->name = $request->name;
            $user->Gender = $request->Gender;
            $user->height = $request->height;
            $user->weight = $request->weight;
            $user->save();
            return redirect()->back()->with('success', 'User updated successfully');
        } else {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->Gender = $request->Gender;
            $user->height = $request->height;
            $user->weight = $request->weight;
            $user->save();
            return redirect()->back()->with('success', 'User created successfully');
        }
    }
    public function storeBirth(Request $request)
    {
        $birthReport_store = new BirthReport();
        $birthReports = BirthReport::all();
        $error = 'User not found';
        $success = 'Birth report created successfully';

        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return view('hospital/birth-report', compact('error', 'birthReports'));
        }
        $birthReport_store->user_id = $user->id;
        $birthReport_store->Gender = $request->Gender;
        $birthReport_store->weight = $request->weight;
        $birthReport_store->height = $request->height;
        $birthReport_store->mother_name = $request->mother_name;
        $birthReport_store->father_name = $request->father_name;
        $birthReport_store->report = $request->report;
        $birthReport_store->date = $request->date;
        $birthReport_store->save();

        return view('hospital/birth-report', compact('birthReports', 'success'));
    }
    public function storeBlood(Request $request)
    {
        $success = 'Blood bank created successfully';
        $error = 'User not found';
        $warning = 'User not found';

        $blood_banks = BloodBank::all();
        $blood_bank = new BloodBank();
        $blood_bank->donation_date = $request->donation_date;
        // fidning user id 
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return view('hospital/blood-bank', compact('blood_banks', 'warning'));
        }
        $blood_bank->user_id = $user->id;
        $blood_bank->blood_group = $request->blood_group;
        $blood_bank->save();

        if (!$blood_bank) {
            return view('hospital/blood-bank', compact('blood_banks', 'error'));
        }

        // using return with eror and compact 
        return view('hospital/blood-bank', compact('blood_banks', 'success'));
    }
    public function updateBlood(Request $request)
    {
        // updating the date and blood group
        $blood_banks = BloodBank::all();
        $error = 'Blood bank not found';
        $success = 'Blood bank updated successfully';
        $blood_bank = BloodBank::find($request->id);
        if (!$blood_bank) {
            return view('hospital/blood-bank', compact('blood_banks', 'error'));
        }
        $blood_bank->donation_date = $request->donation_date;
        $blood_bank->blood_group = $request->blood_group;
        $blood_bank->save();
        return view('hospital/blood-bank', compact('blood_banks', 'success'));
    }
    public function deleteBlood(string $id)
    {
        $blood_banks = BloodBank::all();
        $error = 'Blood bank not found';
        $success = 'Blood bank deleted successfully';
        $blood_bank = BloodBank::find($id);
        if (!$blood_bank) {
            return view('hospital/blood-bank', compact('blood_banks', 'error'));
        }
        $blood_bank->delete();
        return view('hospital/blood-bank', compact('blood_banks', 'success'));
    }
    public function updateInvetory(Request $request)
    {
        $inventory = InventoryItemReport::all();
        $category = MedecineCategory::all();
        $error = 'Inventory item not found';
        $success = 'Inventory item updated successfully';
        $inventory_item = InventoryItemReport::find($request->id);
        if (!$inventory_item) {
            return view('hospital/inventory-items', compact('inventory', 'error'));
        }
        $inventory_item->name = $request->name;
        $inventory_item->category_id = $request->category_id;
        $inventory_item->quantity = $request->quantity;
        $inventory_item->save();
        return view('hospital/inventory-items', compact('inventory', 'success', 'category', 'inventory'));
    }
    public function deleteInvontory(string $id)
    {
        $inventory = InventoryItemReport::all();
        $category = MedecineCategory::all();
        $error = 'Inventory item not found';
        $success = 'Inventory item deleted successfully';
        $inventory_item = InventoryItemReport::find($id);
        if (!$inventory_item) {
            return view('hospital/inventory-items', compact('inventory', 'error', 'category', 'inventory'));
        }
        $inventory_item->delete();
        return view('hospital/inventory-items', compact('inventory', 'success', 'category', 'inventory'));
    }
    public function storeInventory(Request $request)
    {
        $inventory = InventoryItemReport::all();
        $category = MedecineCategory::all();
        $error = 'Inventory item not found';
        $success = 'Inventory item created successfully';
        $inventory_item = new InventoryItemReport();
        $inventory_item->name = $request->name;
        $inventory_item->category_id = $request->category_id;
        $inventory_item->quantity = $request->quantity;
        $inventory_item->save();
        return view('hospital/inventory-items', compact('inventory', 'success', 'category', 'inventory'));
    }
    public function storeAppointment(Request $request)
    {
        $appointment = new Appointment();
        // getting the user email and then looking for patient id 
        $user = User::where('email', $request->email)->first();


        $appointment->patient_id = $user->id;
        $appointment->appointment_date = $request->date;
        $appointment->status = $request->status;
        $appointment->save();
        return redirect()->back()->with('success', 'Appointment created successfully');
    }
    public function UpdateAppointment(Request $request)
    {
        $appointment = Appointment::find($request->id);
        if (!$appointment) {
            return redirect()->back()->with('error', 'Appointment not found');
        }
        $appointment->appointment_date = $request->date;
        $appointment->status = $request->status;
        $appointment->save();
        return redirect()->back()->with('success', 'Appointment updated successfully');
    }
    public function destroyAppointment(string $id)
    {
        $appointment = Appointment::find($id);
        if (!$appointment) {
            return redirect()->back()->with('error', 'Appointment not found');
        }
        $appointment->delete();
        return redirect()->back()->with('success', 'Appointment deleted successfully');
    }
    public function AprouveAppointment(string $id)
    {
        $appointment = Appointment::find($id);
        if (!$appointment) {
            return redirect()->back()->with('error', 'Appointment not found');
        }
        $appointment->status = 'approved';

        if ($appointment->save()){
            $user = User::find($appointment->patient_id);
            $email = $user->email;
            $status = 'approved';
            $date = $appointment->appointment_date;
            Mail::to($email)->send(new MailNotify($status,$date));
        }
        return redirect()->back()->with('success', 'Appointment approved successfully');
    }
    public function RejectAppointment(string $id)
    {
        $appointment = Appointment::find($id);
        if (!$appointment) {
            return redirect()->back()->with('error', 'Appointment not found');
        }
        $appointment->status = 'rejected';
        if ($appointment->save()){
            $user = User::find($appointment->patient_id);
            $email = $user->email;
            $status = 'rejected';
            $date = $appointment->appointment_date;
            Mail::to($email)->send(new MailNotify($status,$date));
        }
        return redirect()->back()->with('success', 'Appointment rejected successfully');
    }
    public function updateRole(Request $request)
    {
        $doctor = Doctors::find($request->doctor_id);
        if (!$doctor) {
            dd($request->doctor_id);
            return redirect()->back()->with('error', 'User not found');
        }
        $doctor->role = $request->role;
        $doctor->save();
        return redirect()->back()->with('success', 'Role updated successfully');
    }
}
