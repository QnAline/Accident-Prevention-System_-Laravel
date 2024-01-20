<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Models\Sensor_data; 
class feedbackController extends Controller
{
    public function store(){
        $feed= new Feedback();
        $feed->name=request('name');
        $feed->email=request('email');
        $feed->Messages=request('message');

         $feed->save();
        return redirect("/");
    }
    public function display(){
        $sensorData = Sensor_data::all();

        return view('alldetails',[ 'sensorData'=>$sensorData]);
    }
    public function deleteSensorData($id) {
         $sensorData = Sensor_data::find($id);

        if ($sensorData) {
        $sensorData->delete();
     }

     return redirect()->back();
}


public function FirstgetData($id)
{
    $sensorData = Sensor_data::find($id);

   return view('edit', ['sensorData' => $sensorData]);
}

public function updateData(Request $request, $id)
{
    

    $sensorData = Sensor_data::find($id);

    if ($sensorData) {
        $validatedData = $request->validate([
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'license_plate' => 'required|string',
            'model' => 'required|string',
            'impact_severity' => 'required|string',
            'sensor_id' => 'required|string',
            // Add other fields as needed
        ]);

        $sensorData->update($validatedData);
    }
    return redirect('/alldetails');
}
}
