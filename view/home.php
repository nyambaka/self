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
<div class="background-video">
    <video autoplay="autoplay" src="assets/video.mp4" loop ></video>
</div>
<div class="body">
    <div class="welcome">
        <h2> Welcome To My Site</h2>
    </div>
    <div class="pic">
        <div class="pic-image">
            <img src="assets/profile.jpg" width="100%" height="100%" class="pic-image-image">
        </div>
        <div class="header pic-description" >
            NELSON NYAMBAKA
        </div>
    </div>

    <div class="card">
        <div>
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
        <div>
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
        <div class="card-line">
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
    <div class="footer">
        <a href="https://github.com/nyambaka"><img src="assets/profile.jpg" class="contact-img"></a>
        <a href="https://facebook.com/nyambaka"><img src="assets/photos/facebook.jpg" class="contact-img"></a>
        <a href="phone"><img src="assets/photos/phone.png" class="contact-img"></a>
        <a href="sms"><img src="assets/photos/sms.png" class="contact-img"></a>
        <a href="whatsapp"><img src="assets/photos/whatsapp.jpg" class="contact-img"></a>
    </div>
</div>
</body>
</html>