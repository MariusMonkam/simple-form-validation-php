
<link rel="stylesheet" href="form2.css" type="text/css">

<div class="container">  
  <form id="contact" name="contact"  onsubmit="return validateForm2()" method="post">
    <h3>Quick Contact</h3>
    <h4>Contact us today, and get reply with in 24 hours!</h4>
    <fieldset>
      <input placeholder="Your firstname" type="text" id="firstname2" name="firstname2"  autofocus>
      <span class="error"><?=$name2_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="text" id="email2" name="email2">
      <span class="error"><?=$email2_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" type="text" id="phone2" name="phone2" >
      <span class="error"><?=$phone2_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Web Site starts with http://" type="text" id="url2" name="url2" >
      <span class="error"><?=$url2_error ?></span>
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your Message Here...." id="message2" name="message2"></textarea>
      <span class="error"><?=$message2_error ?></span>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit">Submit</button>
    </fieldset>
  </form>
 <div class="text-center">
 <a href="http://localhost/myphp/respondesign/phptraining/">Back to Home</a><br>

 </div>
  
</div>

