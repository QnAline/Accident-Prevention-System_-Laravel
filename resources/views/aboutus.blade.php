@extends('layouts.app')

@section('content')

<div class='backgroundon' style=" background-image: url('Image/star.png'); background-repeat: no-repeat; background-size: 100% 100%;margin: 40px; color: white">

<div class="flex-container">
<div class="Link_left">
                <ul class="linked">
                    <a href="/dashboard" class="list-group-item" onmouseover="this.style.backgroundColor='black'; this.style.color='white';"
                                    onmouseout="this.style.backgroundColor='teal'; this.style.color='white';">Dashboard</a>
                </ul>
</div>
   <div class="System">
    <h3 >About Us</h3>
    <hr style='margin-left:182px; border: 3px solid white; width:45%;'>
</div>
</div>

<div style='display:flex; margin-top:40px; margin-bottom:40px; padding: 20px; '  >

    <div class="aboutus-container" style="background-image: url('Image/backgroundImage.jpg'); background-repeat: no-repeat; color:white; margin-left:200px; padding:20px; width:40%; height:510px;">
        <div class="meaning">
            <p>Our company pioneers AI-driven safety solutions for fleets, using advanced sensors to foresee and prevent accidents. With cutting-edge tech and safety measures, we aim to safeguard workplaces, transport, and public spaces. Our system constantly monitors surroundings via sensors, analyzing data instantly. When a potential collision is sensed, it alerts and triggers automatic braking in vehicles. This proactive approach detects risks early, preventing accidents, and boosts safety in fleet operations.</p>
        </div>
    </div>

    <div class="about" >
        <div class='mission' >
            <div class="mission-content">
                <img src="{{ asset('Image/mission.jpg') }}" alt="mission" style='width:90%; height:90%;border-radius: 50%; margin-top:0px;'>
            </div>
            <div class="next-text">
                <p style="background-image: url('Image/backgroundImage.jpg'); background-repeat: no-repeat; color:white; margin-top:35px; width:80%; padding:50px">Our mission is to develop an accident prevention system that utilizes advanced warnings and automatic braking mechanisms, leveraging cutting-edge technology to avert accidents. Through proactive alerts and responsive braking, we aim to ensure safety on roads by mitigating potential collisions and enhancing overall driving security.</p>
            </div>
        </div>
    </div>

</div>


<div class="aboutus-container" style="background-image: url('Image/backgroundImage.jpg'); background-repeat: no-repeat; color:white;  padding:0px; width:80%; height:350px;  margin-left:220px;">


<span>
<hr/>
<strong> Our Team <hr/></strong>
</span>

<div>
<div class="team">
  <div class="team_item">
      <img src="{{ asset('Image/const.png') }}" alt="our image" > 
      <p >Constantine NYIRAMBARUSHIMANA</p>

</div>
<div class="team_item">
      <img src="{{ asset('Image/Al .png') }}" alt="our image">
      <p class="team_item">Aline NYIRANIZEYIMANA</P>

</div>

</div>
</div>



</div>
</div>
<footer>
<div class="footer-container">
    <div class="footer-logo">
         <a href='' ><img src="{{ asset('Image/aps.png') }}" alt="footer logo" style=" width: 70px;
            height: 70px;
            border-radius: 50%;  margin-left:0px; margin-top: 20px;" /> </a>
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