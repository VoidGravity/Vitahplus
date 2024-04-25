<?php

namespace App\Http\Controllers;

use App\Models\Doctors;
use Illuminate\Http\Request;

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
        return view('frontOffice/index',compact('doctors'));
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
        return view('frontOffice/appointment');
    }

    public function showFrontOfficeContact()
    {
        return view('frontOffice/contact');
    }
}
