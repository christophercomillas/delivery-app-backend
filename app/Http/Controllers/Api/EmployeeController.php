<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\State;
use App\Models\Department;
use App\Models\Employee;
use App\Http\Resources\EmployeeResource;
use App\Http\Resources\EmployeeSingleResource;
use App\Http\Requests\EmployeeStoreRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //dd($request);
        $employees = Employee::all();
        if($request->search)
        {
            $employees = Employee::where('first_name','like',"%$request->search%")
            ->orWhere('last_name','like',"%$request->search%")
            ->get();
        }
        elseif($request->department_id)
        {
            $employees = Employee::where('department_id','like',"%$request->department_id%")->get();
        }


        return EmployeeResource::collection($employees);
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
    public function store(EmployeeStoreRequest $request)
    {
        //dd($request);
        $employee = Employee::create($request->validated());

        return response()->json(['status'=>200,'data'=>$employee]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return new EmployeeSingleResource($employee);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmployeeStoreRequest $request, Employee $employee)
    {
        //
        $employee->update($request->validated());

        return response()->json(['status'=>200,'data'=>$employee]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {

        $employee->delete();

        return response()->json(['data'=> 'deleted', 'name' => $employee->first_name.' '.$employee->last_name ]);
    }

    public function countries()
    {
        $countries = Country::all();

        return response()->json($countries);
    }

    public function states(Country $country)
    {
        // dd($country);
        return response()->json($country->states);

    }

    public function cities(State $state)
    {
        //dd($state);
        return response()->json($state->cities);

    }

    public function departments()
    {
        $departments = Department::all();
        
        return response()->json($departments);
    }

}