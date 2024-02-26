<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontOfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showFrontOfficeIndex()
    {
        return view('frontOffice/index');
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
