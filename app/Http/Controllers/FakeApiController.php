<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Sensor_data; // Assuming SensorData is your Eloquent model for sensor_data table

class FakeApiController extends Controller
{
    public function fetchData()
    {
        $response = Http::get('http://localhost:3000/data');

        if ($response->successful()) {
            $data = $response->json();

        //    return $data;
          foreach ($data as $item) {
            Sensor_data::create([
                'timestamp' => $item['timestamp']['date'],
                'latitude' => $item['location']['latitude'],
                'longitude' => $item['location']['longitude'],
                'license_plate' => $item['vehicle']['license_plate'],
                'model' => $item['vehicle']['model'],
                'impact_severity' => $item['impact_severity'],
                'sensor_id' => $item['sensor_id'],
            ]);
        }

            return response()->json(['message' => 'Data stored successfully'], 200);
        } else {
            return response()->json(['message' => 'Failed to fetch data or store it'], $response->status());
        }
    }

    public function index(){
        // return Sensor_data::all();
      
      
            $sensorData = Sensor_data::all(); // Fetch all sensor data from the database
            
            $markers = [];
        
            // Loop through each sensor data and create markers
            foreach ($sensorData as $data) {
                $markers[] = [
                    'position' => [
                        'lat' => $data->latitude,
                        'lng' => $data->longitude
                    ],
                    'title' => $data->license_plate, // Use license plate as the marker title
                    'draggable' => false // Set draggable property as needed
                ];
            }
       
           $accidentCounts = Sensor_data::selectRaw('DATE(timestamp) as date, COUNT(*) as count')
            ->groupBy('date')
            ->orderBy('date')
            ->get();
            
       return view('dashboard',[ 'markers'=>$markers,'accidentCounts' => $accidentCounts,'sensorData'=>$sensorData]);
        }
        
     }
  