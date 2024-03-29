<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
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

    public function showPagesFaqs()
    {
        return view('pages/faqs');
    }

    public function showPagesTermsPolicy()
    {
        return view('pages/terms-policy');
    }

    public function showPagesRegularV1()
    {
        return view('pages/regular-v1');
    }

    public function showPagesRegularV2()
    {
        return view('pages/regular-v2');
    }

    public function showPagesAuthsAuthLogin()
    {
        return view('pages/auths/auth-login');
    }

    public function showPagesAuthsAuthRegister()
    {
        return view('pages/auths/auth-register');
    }

    public function showPagesAuthsAuthReset()
    {
        return view('pages/auths/auth-reset');
    }

    public function showPagesAuthsAuthSuccess()
    {
        return view('pages/auths/auth-success');
    }

    public function showPagesAuthsAuthLoginV2()
    {
        return view('pages/auths/auth-login-v2');
    }

    public function showPagesAuthsAuthRegisterV2()
    {
        return view('pages/auths/auth-register-v2');
    }

    public function showPagesAuthsAuthResetV2()
    {
        return view('pages/auths/auth-reset-v2');
    }

    public function showPagesAuthsAuthSuccessV2()
    {
        return view('pages/auths/auth-success-v2');
    }

    public function showPagesAuthsAuthLoginV3()
    {
        return view('pages/auths/auth-login-v3');
    }

    public function showPagesAuthsAuthRegisterV3()
    {
        return view('pages/auths/auth-register-v3');
    }

    public function showPagesAuthsAuthResetV3()
    {
        return view('pages/auths/auth-reset-v3');
    }

    public function showPagesAuthsAuthSuccessV3()
    {
        return view('pages/auths/auth-success-v3');
    }

    public function showPagesErrors404Classic()
    {
        return view('pages/errors/404-classic');
    }

    public function showPagesErrors504Classic()
    {
        return view('pages/errors/504-classic');
    }

    public function showPagesErrors404S1()
    {
        return view('pages/errors/404-s1');
    }

    public function showPagesErrors504S1()
    {
        return view('pages/errors/504-s1');
    }
}
