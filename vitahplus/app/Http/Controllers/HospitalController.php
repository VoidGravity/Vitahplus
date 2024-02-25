<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function showHospitalIndex()
    {
        return view('hospital/index');
    }

    public function showHospitalAppointment()
    {
        return view('hospital/appointment');
    }

    public function showHospitalPatientAdd()
    {
        return view('hospital/patient-add');
    }

    public function showHospitalPatientList()
    {
        return view('hospital/patient-list');
    }

    public function showHospitalPatientProfile()
    {
        return view('hospital/patient-profile');
    }

    public function showHospitalDoctorNurseAdd()
    {
        return view('hospital/doctor-nurse-add');
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

    public function showHospitalInvoiceList()
    {
        return view('hospital/invoice-list');
    }

    public function showHospitalInvoiceDetails()
    {
        return view('hospital/invoice-details');
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

    public function showHospitalInvoicePrint()
    {
        return view('hospital/invoice-print');
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
}
