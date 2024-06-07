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
        $request->validate([
            'user_id' => 'required|string|max:255',
            'name' => 'required|string|name|max:255|unique:devices,name',
            // validasi lainnya sesuai kebutuhan
        ]);
        $device= new Device;
        $device->user_id= $request->user_id;
        $device->name = $request->name;
        $device->password = Hash::make($request->password);
        $device->save();
 
        return redirect('/devices');
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
        $request->validate([
            'user_id' => 'required|string|max:255',
            'name' => 'required|string|name|max:255|unique:devices,name,'.$id,
            // validasi lainnya sesuai kebutuhan
        ]);
        $device = Device::findOrFail($id);
        $device->update($request->all());

        return redirect("/devices")->with('success', 'Device updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $device = Device::findOrFail($id);
        $device->delete();
        return redirect("/devices")->with('success','device deleted successfully');
    }
    }