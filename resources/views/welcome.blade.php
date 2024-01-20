@extends('layouts.app')

@section('content')
<div class='background-welcome'  style="background-image: url( 'Image/backgroundImage.jpg' ); background-repeat: no-repeat; color:white;margin:50px; padding:50px">
<div class="flex-container">
<div class="Link_left">
                <ul class="linked">
                    <a href="/dashboard" class="list-group-item" onmouseover="this.style.backgroundColor='black'; this.style.color='white';"
                                    onmouseout="this.style.backgroundColor='teal'; this.style.color='white';">Dashboard</a>
                </ul>
</div>
   <div class="System">
    <h3 >Accident Prevention System</h3>
</div>
</div>
<div class="welcome">
   <div class='image'>
      <img src="{{ asset('Image/accident-back.webp') }}" alt="continue">
   </div>
   <div class='text-welcome'>
   <p>An accident prevention system aims<br/>
     to mitigate potential hazards and<br/>
      risks by implementing proactive measures,<br/>
       advanced technology, and safety protocols to avoid<br/>
        or minimize accidents in various settings,<br/>
         such as workplaces, transportation, or public spaces.</p>
    
     <strong  style=" color:green; ">Download App</strong>
     <img src="{{ asset('Image/appdownload.png') }}" alt="download" style="width: 45px;height: 45px; margin-left:5px;" />

    </div>
 </div>
 </div>
</div>

 <div class='meaning'  style="background-image: url( 'Image/backgroundImage.jpg' ); background-repeat: no-repeat; color:white;margin: 20px 50px 80px 50px; padding: 35px; ">

 <strong>How our System work?</strong>
 <p style='font-size: 15px; margin-top: 40px;'>An AI-powered accident prevention system for fleets utilizes sensors to detect and proactively address potential hazards. By employing cutting-edge technology and safety protocols, this system aims to prevent or minimize accidents across diverse settings like workplaces, transportation, or public spaces. It works by constantly monitoring the surroundings using sensors, which analyze data in real-time. When a potential collision is identified, the AI system swiftly intervenes by providing notifications and initiating automatic braking mechanisms in vehicles. This proactive approach ensures that imminent accidents are identified early, allowing the system to take preventive actions, thereby enhancing safety and reducing the risk of collisions in fleet operations.
 
</p>

</div>
<div class='system-work'>
<img src="{{ asset('Image/howAPSwork.png') }}" alt="download" style="width: 91.5%;height: 450px; margin-left:50px;margin-right:50px;margin-bottom:50px;" />
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
          <li class="call_footer"><img src="{{ asset('Image/called.png') }}" alt="call" /> <strong>+250782004043</strong></li>
          <li style="display: block;"><a href="https://accounts.google.com/v3/signin/identifier?hl=en-gb&ifkv=ASKXGp2jMleSYpI_4WB8qX7TttFU4dfGNmHLe1qfq3qbIwgsI-8DdJW6W_s3lMa-opTulUEtHNyYug&flowName=GlifWebSignIn&flowEntry=ServiceLogin&dsh=S218818139%3A1703826130800083&theme=glif">
          <img src="{{ asset('Image/gmail.png') }}" alt="gmail" /><strong> alineirembo@gmail.com</strong></a></li>
          </div>
      </ul>
    </div>
</div>
<p class="copyright"> copyright <img src="{{ asset('Image/copyright.png') }}" alt="copyright" style="width: 20px; height: 20px;" />   2023. All rights reserved</p>
</footer>


@endsection