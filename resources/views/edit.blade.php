@extends('layouts.app')

@section('content')

<div class="edit_container">
  

    <h1 class='detail_head'>Edit Data</h1>
    @if(isset($sensorData))
    <form action="/edit/{{ $sensorData->id }}" method="POST" style="display: grid; grid-template-columns: max-content 1fr; gap: 10px; width: 40%; box-sizing: border-box; margin-left: 380px;">
        @csrf
        @method('PUT')

        <label for="id">Id:</label>
        <input type="text" name="id" value="{{ $sensorData->id }}" required>

        <label for="latitude">Latitude:</label>
        <input type="text" name="latitude" value="{{ $sensorData->latitude }}" required>

        <label for="longitude">Longitude:</label>
        <input type="text" name="longitude" value="{{ $sensorData->longitude }}" required>

        <label for="license_plate">License Plate:</label>
        <input type="text" name="license_plate" value="{{ $sensorData->license_plate }}" required>

        <label for="model">Model:</label>
        <input type="text" name="model" value="{{ $sensorData->model }}" required>

        <label for="impact_severity">Impact Severity:</label>
        <input type="text" name="impact_severity" value="{{ $sensorData->impact_severity }}" required>

        <label for="sensor_id">Sensor ID:</label>
        <input type="text" name="sensor_id" value="{{ $sensorData->sensor_id }}" required>

        <label for="created_at">Created At:</label>
        <input type="text" name="created_at" value="{{ $sensorData->created_at }}" required>

        <label for="updated_at">Updated At:</label>
        <input type="text" name="updated_at" value="{{ $sensorData->updated_at }}" required>

        <button type="submit" class="update">Update</button>
    </form>
    @else
        <p>No data available for editing.</p>
    @endif

</div>
<footer>
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