<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        $staffs = Staff::all();
        return view('index', compact('staffs'));
    }

    public function delete($id)
    {
        Staff::destroy($id);
        return redirect()->back();
    }

    public function showFormAdd()
    {
        return view('add');
    }

    public function addStaff(Request $request)
    {
        $staff = new Staff();
        $staff->name = $request->name;
        $staff->group = $request->group;
        $staff->email = $request->email;
        $staff->phone = $request->phone;
        $staff->ID_number = $request->ID_number;
        $staff->dob = $request->dob;
        $staff->gender = $request->gender;
        $staff->address = $request->address;
        $staff->save();
        return redirect('/');
    }

    public function showFormEdit($id)
    {
        $staff = Staff::find($id);
        return view('edit', compact('staff'));
    }

    public function editStaff(Request $request)
    {
        $staff = Staff::find($request->id);
        $staff->name = $request->name;
        $staff->group = $request->group;
        $staff->email = $request->email;
        $staff->phone = $request->phone;
        $staff->ID_number = $request->ID_number;
        $staff->dob = $request->dob;
        $staff->gender = $request->gender;
        $staff->address = $request->address;
        $staff->save();
        return redirect('/');
    }

    public function search(Request $request)
    {
        $staffs = Staff::where('name','LIKE', '%'.$request->search.'%')
            ->orWhere('gender','LIKE', '%'.$request->search.'%')
            ->orWhere('group','LIKE', '%'.$request->search.'%')
            ->orWhere('phone','LIKE', '%'.$request->search.'%')
            ->orWhere('ID_number','LIKE', '%'.$request->search.'%')->get();
        return view('index', compact('staffs'));
    }
}
