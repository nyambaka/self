<?php
global $location
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nelson Nyambaka</title>
    <link rel="stylesheet" href="<?= $location . "/assets/home.css" ?>"
</head>
<body>
<div class="background-video">
    <video autoplay="autoplay" src="assets/video.mp4" loop muted ></video>
</div>
<div class="body">
    <div class="welcome">
        <h2>NELSON NYAMBAKA</h2>
    </div>
    <div class="pic">
        <div class="pic-image">
            <img src="assets/photos/photo.png">
        </div>
        <div class="profile-name" >
            NELSON NYAMBAKA
        </div>
    </div>

    <div class="card">
        <div class='card-holder'>
            <div class="header">
                PERSONAL STATEMENT
            </div>
            <div class="details">
                I started with the interest in Genomic Science. 
                attracted to the field because of its unimaginable opportunities.
                I later was introduced to computer programming as a way to pass time. 
                Later i learnt that the field had almost same opportunity
                online courses put me on feet.
                I preferred web to native. 
                Now am both web developer and genomic scientist.
                Since Genomic science is relatively new proffessional i mostly deal with web development.
            </div>
           <hr>
        </div>
    </div>

    <div class="card">
        <div class='card-holder'>
            <div class="header">WEB SKILLS</div>
            <div class="details">
                Preffered computer programming languages<br>
                <br>
                PHP<br>
                MYSQL<br>
                C<br>
                c++<br>
                HTML<br>
                CSS<br>
                JAVASCRIPT<br>
                PYTHON<br>
            </div>
            <hr>
        </div>
    </div>
    <div class='break'></div>
    <div class='section'>
    <div class='form-caption'>
        <div class='caption-header'>
            Request Section
        </div>
        <div class="details">
        It comes to the simple phrase if it not on web it does not exist.
        <br>
        <br>
        If you would like create your website for yourself or your business.
        If a business does not have  a website in this digital age it is loosing alot.
        and it makes it hard to convience its customers even it exists.
        <br>
        Having a website is great .Just having a website is not enough,
        Since a website might be the first impression you give your customers having 
        a proffessional looking website a big plus to a business. Don't just exist be live and live fully.
        <br>
        <br>
        You are on right spot if you are looking for  being <i>live</i> fully functional, and being up full time.
        Fill in the the application form or find your favourite communication channel on the footer to get your website.
        </div>
    </div>
    
    <div class='form'>
        <div class='header'>
         Application form
    </div>
        <form onsubmit="return form.auto();" id="form" method="post">
            <div>
                <div id="error"></div>
                <div id="success"></div>
                <label for='name' class='label'  >Enter Your name</label>
                <input  type='text' name='name' id=name class='input' required="required" max="40"/>
                <label for='email' class='label'>Enter Email Address</label>
                <input  type='email' name='email' id=email class='input' required="required"/>
                <label for='details' class='label'>Make a request</label>
                <textarea id='details' name='details'  class='request' required="required" maxlength="40">
                </textarea>
                <input type='reset' name='reset' value='clear' class='reset'/>
                <input type='submit' name='submit' value='send' class='send' />
            </div>
        </form>
    </div>
    </div>
    <div class="footer">
        <a href="https://github.com/nyambaka" class="footer-icon"><img src="assets/photos/github.png" class="contact-img"></a>
        <a href="https://web.facebook.com/citrida.citrida" class="footer-icon"><img src="assets/photos/facebook.jpg" class="contact-img"></a>
        <a href="tel:+254700741837" class="footer-icon"><img src="assets/photos/phone.png" class="contact-img"></a>
        <a href="sms:+254700741837" class="footer-icon"><img src="assets/photos/sms.png" class="contact-img"></a>
        <a href="https://wa.me/254700741837" class="footer-icon"><img src="assets/photos/whatsapp.jpg" class="contact-img"></a>
        <a href="mailto:nelsonnyambaka@gmail.com" class="footer-icon"><img src="assets/photos/email.png" class="contact-img"></a>
    </div>
    <script type="text/javascript"  src="<?= $location . "assets/formSender.js"?>"></script>    
</div>
</body>
</html>