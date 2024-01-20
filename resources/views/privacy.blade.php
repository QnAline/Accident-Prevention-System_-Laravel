@extends('layouts.app')

@section('content')



<div class="privacy-policy">
    <h2>Privacy Policy</h2>
    <p>At our company, we take your privacy seriously. This Privacy Policy outlines the types of personal information we receive and collect when you use our services, as well as how we safeguard and use this information.</p>

    <h3>Information Collection and Use</h3>
    <p>We collect various types of information for different purposes to provide and improve our services to you.</p>

    <h3>Log Data</h3>
    <p>Like many site operators, we collect information that your browser sends whenever you visit our site.</p>

   

    <h3>Changes to This Privacy Policy</h3>
    <p>We reserve the right to update or change our Privacy Policy at any time.</p>

    <h3>Contact Us</h3>
    <p>If you have any questions about this Privacy Policy, please contact us.</p>


</div>

<div class="contacts-container">
<div class="form_contact">

<form  class=" form_privacy"action="/feedback" method="post">
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
