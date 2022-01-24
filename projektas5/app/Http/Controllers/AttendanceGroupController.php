<?php

namespace App\Http\Controllers;

use App\Models\AttendanceGroup;
use App\Http\Requests\StoreAttendanceGroupRequest;
use App\Http\Requests\UpdateAttendanceGroupRequest;
use Illuminate\Http\Request;

class AttendanceGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attendancegroups = AttendanceGroup::all();
        return view('attendancegroups.index', ['attendancegroups' => $attendancegroups]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('attendancegroups.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAttendanceGroupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attendancegroup = new AttendanceGroup;

        $attendancegroup->name = $request->name;
        $attendancegroup->description = $request->description;
        $attendancegroup->difficulty = $request->difficulty;
        $attendancegroup->school_id = $request->school_id;

        $attendancegroup->save();
        return redirect()->route('attendancegroup.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AttendanceGroup  $attendanceGroup
     * @return \Illuminate\Http\Response
     */
    public function show(AttendanceGroup $attendancegroup)
    {
        return view('attendancegroups.show', ['attendancegroup' => $attendancegroup]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AttendanceGroup  $attendanceGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(AttendanceGroup $attendancegroup)
    {
        return view('attendancegroups.edit', ['attendancegroup' => $attendancegroup]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAttendanceGroupRequest  $request
     * @param  \App\Models\AttendanceGroup  $attendanceGroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AttendanceGroup $attendancegroup)
    {
        $attendancegroup->name = $request->name;
        $attendancegroup->description = $request->description;
        $attendancegroup->difficulty = $request->difficulty;
        $attendancegroup->school_id = $request->school_id;

        $attendancegroup->save();
        return redirect()->route('attendancegroup.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AttendanceGroup  $attendanceGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(AttendanceGroup $attendancegroup)
    {
        $attendancegroup->delete();
        return redirect()->route('attendancegroup.index');
    }
}
