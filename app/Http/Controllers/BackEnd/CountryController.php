<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CountryStoreRequest;
use App\Http\Requests\CountryUpdateRequest;
use App\Models\Country;
use Auth;

class CountryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $countries = Country::all();
        if($request->has('search'))
        {
            $countries = Country::where('name','like',"%{$request->search}%")->orWhere('country_code','like',"%{$request->search}%")->get();
        }
        return view('countries.index',compact('countries'));
    }

    public function create()
    {
        return view('countries.create');
    }

    public function store(CountryStoreRequest $request, )
    {
        Country::create($request->validated());

        return redirect()->route('countries.index')->with('message','Country Successfully Created.');
    }

    public function edit(Country $country)
    {
        //
        return view('countries.edit',compact('country'));
    }

    public function update(CountryUpdateRequest $request, Country $country)
    {
        $country->update($request->validated());       

        return redirect()->route('countries.index')->with('message','Country Successfully Updated.');
    }

    public function destroy(Country $country)
    {
        $country->delete();
        return redirect()->route('countries.index')->with('message','Country Successfully Deleted.');
    }



}
