@extends('layouts.app')

@section('content')
<div class="contacts-container">
<div class="form_contact">

<h2> Give us Feedback</h2>

<form action="/feedback" method="post">
    @csrf
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" class="form-input"><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" class="form-input"><br><br>

    <label for="message">Message:</label><br>
    <textarea id="message" name="message" rows="4" cols="50" class="form-textarea"></textarea><br><br>

    <input type="submit" value="Send" class="form_submit">
</form>

</div>
<div id="map" style="height: 450px; width: 700px;"></div>
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


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCG06u0SQFBEzWIvI85e57psRrfMdQkpF4"></script>

<script>
   
    function initMap() {
        const map = new google.maps.Map(document.getElementById('map'), {
            center: { lat: -1.9576, lng: 30.1346 },
            zoom: 7
        });

       
        var marker = new google.maps.Marker({
            position:{ lat: -1.9576, lng: 30.1346 },
            map: map,
            title: 'Marker Title'
        });

        
        var infoWindow = new google.maps.InfoWindow({
            content: "In RWANDA <br> KIGALI CITY<br> KICUKIRO DISTRICT"
        });

        // Open info window when marker is clicked
        marker.addListener('click', function () {
            infoWindow.open(map, marker);
        });
    }

    // Initialize the map when the DOM content is loaded
    document.addEventListener('DOMContentLoaded', initMap);

</script>

@endsection
