<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use Illuminate\Support\Facades\Hash;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $devices = Device::all();
        return view('content.manage.devices.index',compact('devices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('content.manage.devices.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "id" => ['required', 'max:6'],
            "user_id" => ['required'],
            "name" => ['required'],
        ]);
        $device = new Device;
        $device->id = $request->id;
        $device->user_id = $request->user_id;
        $device->name = $request->name;   
        $device->save();
        return redirect("manage/devices")->with('success', 'Device updated successfully');
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
        $device = Device::findOrFail($id);
        return view('content.manage.devices.edit', compact('device'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{
            $validated = $request->validate([
                "id" => ['required', 'max:6'],
                "user_id" => ['required'],
                "name" => ['required'],
            ]);
            
            $device = Device::find($id);
            $device->id = $request->id ?? $device->id;
            $device->user_id = $request->user_id ?? $device->user_id;
            $device->name = $request->name ?? $device->name;   
            $device->save();

            return redirect()->route('devices.index');
        } catch (\Illuminate\Database\QueryException $e){
            return redirect()->route('devices.edit',$id);
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $device = Device::findOrFail($id);
        $device->delete();
        return redirect("manage/devices")->with('success','device deleted successfully');
    }
    }