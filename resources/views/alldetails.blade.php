@extends('layouts.app')

@section('content')

<div class="details_background">
<div class='dashboard_linked' >
   
   <div class="Link_left" style='margin-left: 0px;'>
                   <ul class="linked">
                       <a href="/dashboard" class="list-group-item" style="background-color: teal;">Dashboard</a>
                       <a href="/resource" class="list-group-item">Resources</a>
                       <a href="/feedback" class="list-group-item">Feedback</a>
                   </ul>
   </div> 
  </div>

<h1 class='detail_head' >Sensor Data</h1>

@if(count($sensorData) > 0)
<div class="sensor-data" >
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Timestamp</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>License Plate</th>
                <th>Model</th>
                <th>Impact Severity</th>
                <th>Sensor ID</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sensorData as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->timestamp }}</td>
                    <td>{{ $data->latitude }}</td>
                    <td>{{ $data->longitude }}</td>
                    <td>{{ $data->license_plate }}</td>
                    <td>{{ $data->model }}</td>
                    <td>{{ $data->impact_severity }}</td>
                    <td>{{ $data->sensor_id }}</td>
                    <td>{{ $data->created_at }}</td>
                    <td>{{ $data->updated_at }}</td>
                    <td> <form action="{{ route('editSensorData', ['id' => $data->id]) }}" method="GET">
                    @csrf
                    
                   <button type="submit" style="border: none; background: none; padding: 0; margin: 0; cursor: pointer; outline: none;">
                   <img src="{{ asset('Image/edit.png') }}" alt="edit" />
                   </button></td>


                    <td>
                    <form action="{{ route('deleteSensorData', ['id' => $data->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                   <button type="submit" style="border: none; background: none; padding: 0; margin: 0; cursor: pointer; outline: none;">
                   <img src="{{ asset('Image/delete.png') }}" alt="delete" />
                   </button>
                   </form>

</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@else
    <p>No sensor data available.</p>
@endif

</div>


<footer >
<div class="footer-container">
    <div class="footer-logo">
         <a href='' ><img src="{{ asset('Image/aps.png') }}" alt="footer logo" style=" width: 70px;
            height: 70px;
            border-radius: 50%;  margin-left:20px; margin-top: 20px;" /> </a>
    </div>
    
    <div class="footer-links">
      <p>Quick Links:</p>
      <ul class="quicklinks">
         <li><a href="https://police.gov.rw/contact-us/">National Police</a></li>
         <li><a href="privacyPolicy">Privacy Policy</a></li>
         <li><a href="terms">Terms and Conditions</a></li>
      </ul>

    </div>
      <div class="footer-contact">
        <p>Get in Touch with Us:</p>
          <ul class="quicklinks">
          <li><a href="https://twitter.com/Aline72295818"><img src="{{ asset('Image/x.png') }}" alt="twitter" /></a></li>
          <li><a href="https://web.whatsapp.com/"><img src="{{ asset('Image/whatsapp.png') }}" alt="whatsapp" /></a></li>
          <li><a href="https://www.instagram.com/aline_nyiranizeyimana/"><img src="{{ asset('Image/instagram.png') }}" alt="instagram" /></a></li>

          <div class="contact">
          <li><img src="{{ asset('Image/called.png') }}" alt="call" /> <strong>+250782004043</strong></li>
          <li style="display: block;"><a href="https://accounts.google.com/v3/signin/identifier?hl=en-gb&ifkv=ASKXGp2jMleSYpI_4WB8qX7TttFU4dfGNmHLe1qfq3qbIwgsI-8DdJW6W_s3lMa-opTulUEtHNyYug&flowName=GlifWebSignIn&flowEntry=ServiceLogin&dsh=S218818139%3A1703826130800083&theme=glif">
          <img src="{{ asset('Image/gmail.png') }}" alt="gmail" /><strong> alineirembo@gmail.com</strong></a></li>
          </div>
      </ul>
    </div>
</div>
<p class="copyright"> copyright <img src="{{ asset('Image/copyright.png') }}" alt="copyright" style="width: 20px; height: 20px;" />   2023. All rights reserved</p>
</footer>
@endsection