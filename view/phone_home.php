<?php
global $location
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="<?= $location . "/assets/home.css" ?>"
</head>
<body>
<div class="body mobile">
    <div class="welcome">
        <h2> NELSON NYAMBAKA</h2>
    </div>
    <div class="pic">
        <div class="pic-image">
            <img src="assets/profile.jpg" width="100%" height="100%" class="pic-image-image">
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
                I started with the interest in Genetic Science. I was attracted to the field because of its unimaginable opportunities.
                I later introduced to computer programming as a way to pass time. Later i learnt that the field had almost same opportunity
                online courses put me on feet.I took a web preferred web to native. I now a proffessional i both web and Genetics.With real world experience
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
    <div class="card">
        <div class='card-holder'>
            <div class="header">
                GENETIC SKILLS
            </div>
            <div class="details">
                Genome Scientist<br>
                Qualification:<br>
                Bachelor Degree in Genomic Science<br>
            </div>
        <hr class="hr" >
        </div>
    </div>
    <div class='break'></div>
    <div class='section'>
    <div class='form-caption'>
        <div class='caption-header'>
            Request Section
        </div>
        If you like create your website for yourself or your business.
        I belive if a business does not have  a website in this digital age it is loosing alot.
        and it makes it hard to convience it customers that they mean business.
        It comes to the simple phrase if it has no website it does not exist.
        
        having a website is great .Just having a website is not enough,
        Since a website might be the first impression you give your customers a having 
        A proffessional looking website a big plus to a business. Don't just exist be live and live fully.
        
        You are on right spot if you are looking for  being <i>live</i> fully functional, and being up up full time.
        Fill in the the application form or find your favourite communication channel on the footer.
    </div>
    
    <div class='form'>
        <div class='header'>
         Application form
    </div>
        <form method='post' action='<?=$location?>/request'>
            <div>
                <label for='name' class='label' >Enter Your name</label>
                <input  type='text' name='name' id=name class='input'/>
                 <label for='email' class='label'>Enter Email Address</label>
                <input  type='text' name='email' id=email class='input'/>
                <label for='details' class='label'>Make a request</label>
                <textarea id='details' name='details'  class='request'>
                </textarea>
                <input type='reset' name='reset' value='clear' class='reset'/>
                <input type='submit' name='submit' value='send' class='send'/>
            </div>
        </form>
    </div>
    </div>
    <div class="footer">
        <a href="https://github.com/nyambaka"><img src="assets/photos/github.png" class="contact-img"></a>
        <a href="https://facebook.com/nyambaka"><img src="assets/photos/facebook.jpg" class="contact-img"></a>
        <a href="phone"><img src="assets/photos/phone.png" class="contact-img"></a>
        <a href="sms"><img src="assets/photos/sms.png" class="contact-img"></a>
        <a href="whatsapp"><img src="assets/photos/whatsapp.jpg" class="contact-img"></a>
    </div>
</div>
</body>
</html>