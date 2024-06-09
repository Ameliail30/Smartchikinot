<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DataSensor;
use Illuminate\Http\Request;

class SensorController extends Controller
{
  public function store(Request $request){
    DataSensor::create([
        'device_id' => $request->device_kode,
        'temperature'=>$request->temperature,
        'humidity'=>$request->humidity,
        'light_intensity'=>$request->ldr
    ]);
    return response()->json([
        'message'=>'berhasil menambahkan data'
    ]);
  }
}
