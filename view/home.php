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
<body>
        <div class="body">
            <div class="welcome">
                <h2>NELSON NYAMBAKA</h2>
            </div>
            <div class="pic">
                <div class="pic-image">
                    <img src="assets/photos/photo.PNG">
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
                        I started with interest in Genomic Science. Attracted to the field because of its unimaginable opportunities. I later was introduced to computer programming as a way to pass time. I learnt that the field had almost same opportunities as Genomic Science . Online courses put me on feet. I preferred the web to native development. Now am both web developer and genomic scientist. Since Genomic science is relatively new proffessional I mostly deal with web development.
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
                        Would you like to create your website for yourself or your business. If a business does not have a website at this age it is losing a lot, and it makes it hard to communicate to your customers officially.
                        Since a website might be the first impression you give your customers having a professional-looking website a big plus to a business.Make the Major Step to Start the right way by owning a website.
                        <br>
                         Fill in the application form or find your favorite communication channel on the footer to request for a website.
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
                <a href="mailto: nelsonnyambaka@gmail.com" class="footer-icon"><img src="assets/photos/email.png" class="contact-img"></a>
            </div>
            <script type="text/javascript"  src="<?= $location . "assets/formSender.js" ?>"></script>    
        </div>
    </body>
</html>