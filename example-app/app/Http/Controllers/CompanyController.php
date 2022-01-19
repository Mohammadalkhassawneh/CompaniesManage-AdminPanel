<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $companies = Company::paginate(10);
        return view('admin.companies', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/createCompany');
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
        $request->validate([
            'name' => 'required',
            'email'=>'required',
            'logo'=> 'required | dimensions:min_width=100,min_height=100',
            'website'=>'required'
       
        ]);

        $input = $request->all();
        if($request->file('logo')){
            $newLogoName = time() . '-' . $request->logo->getClientOriginalName();
            $request->logo->move(public_path('images'), $newLogoName);
            $input['logo'] = $newLogoName;
        }
        Company::create($input);
        return redirect()->route('company.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\c  $c
     * @return \Illuminate\Http\Response
     */
    public function show(company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\c  $c
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
        return view('admin.editCompany', compact('company'));
   

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\c  $c
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, company $company)
    {
        //
        $request->validate(
            [
                'name' => 'required',
                'email'=>'required',
                'logo'=> 'required',
                'website'=>'required'
            ]);
        $input=$request->all();
        if($request->file('logo')){
            $newLogoName = time() . '-' . $request->logo->getClientOriginalName();
            $request->logo->move(public_path('images'), $newLogoName);
            $input['logo'] = $newLogoName;
        }
        $company->update($input);
        return redirect()->route('company.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\c  $c
     * @return \Illuminate\Http\Response
     */
    public function destroy(company $company)
    {
        //
        $company->delete();
        return back();
    }
}
