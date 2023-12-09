<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Staff; //add Staff Model - Data is coming from the database via Model.
use Image;



class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *  @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staff = Staff::all();
        return view ('staff.index')->with('staff', $staff);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('staff.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
        $requestData = $request->all();
        $fileName = time().$request->file('profileimage')->getClientOriginalName();
        $path = $request->file('profileimage')->storeAs('images', $fileName, 'public');
        $requestData["profileimage"] = '/storage/'.$path;
        Staff::create($requestData);

        return redirect('staff')->with('flash_message', 'Staff Addedd!');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $staff = Staff::find($id);
        return view('staff.show')->with('staff', $staff);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $staff = Staff::find($id);
        return view('staff.edit')->with('staff', $staff);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $staff = Staff::find($id);
        $input = $request->all();
        $staff->update($input);

        if ($request->file('profileimage')) {
        $fileName = time().$request->file('profileimage')->getClientOriginalName();
        $path = $request->file('profileimage')->storeAs('images', $fileName, 'public');
        $requestData["profileimage"] = '/storage/'.$path;

        Staff::findOrFail($id)->update([
            'profileimage' => $requestData["profileimage"],
        ]); 


        }

        return redirect('staff')->with('flash_message', 'staff Updated!');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Staff::destroy($id);
        return redirect('staff')->with('flash_message', 'Staff deleted!'); 
    }
}
