<?php include("header.php");
include("menu.php");  
?>


 <section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-center">
            <div class="banner-content col-lg-7 col-md-6 ">
                <h6 class="text-white ">plateform de gestion des compagnies de transport </h6>
                <h1 class="text-white text-uppercase">
                    Acheter vos billets
                </h1>

                <a href="#" class="primary-btn text-uppercase">Rent Car Now</a>
            </div>
            <div class="col-lg-5  col-md-6 header-right">
                <h4 class="text-white pb-30"></h4>
                <form class="form" role="form" autocomplete="off">
                    <div class="form-group">
                        <div class="default-select" id="default-select" ">
                        <select class="form-control">
                            <option value="" disabled selected hidden>Selectionner votre gare</option>
                            <option value="1">gare UTB koumassi</option>
                            <option value="1">gare UTB adjamé</option>
                            <option value="1">gare UTB bouake </option>
                        </select>
                    </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6 wrap-left">
                    <div class="default-select" id="default-select" ">
                    <select class="form-control">
                        <option value="" disabled selected hidden>ville de depart</option>
                        <option value="1">Bouake</option>
                        <option value="1">korhogo</option>
                        <option value="1">abidjan</option>
                        <option value="1">Pickup Four</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6 wrap-right">
                <div class="input-group dates-wrap">
                    <select class="form-control">
                        <option value="" disabled selected hidden>heure de depart</option>
                        <option value="1">07h</option>
                        <option value="1">08h</option>
                        <option value="1">09h</option>
                        <option value="1">10h</option>
                    </select>
                    <div class="input-group-prepend">
                        <span class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-6 wrap-left">
                <div class="default-select" id="default-select" ">
                <select class="form-control">
                    <option value="" disabled selected hidden>destination</option>
                    <option value="1">Bouake</option>
                    <option value="1">korhogo</option>
                    <option value="1">abidjan</option>
                    <option value="1">Pickup Four</option>
                </select>
            </div>
        </div>

        <div class="col-md-6 wrap-right">
            <div class="input-group dates-wrap">
                <div class="input-group-prepend">
                    <input class="form-control " type="text" name="heure arriver" placeholder="heure d'arriver">
                    <span class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
                </div>
            </div>
        </div>
    </div>
     <div class="form-group">
         <div class="default-select" id="default-select" ">
         <select class="form-control">
             <option value="" disabled selected hidden>Type de bagage</option>
             <option value="1">Valise </option>
             <option value="1">sac a main</option>
             <option value="1">marchandise </option>
             <option value="1">en espèce </option>
         </select>
     </div><br
     <div class="form-group">
         <div class="default-select" id="default-select" ">
         <select class="form-control">
             <option value="" disabled selected hidden>Mode de paiement</option>
             <option value="1">orange money </option>
             <option value="1">moov money</option>
             <option value="1">mtn money </option>
             <option value="1">en espèce </option>
         </select>
     </div><br

    <div class="from-group">
        <input class="form-control txt-field" type="text" name="name" placeholder="numero de paiement">
    </div>

    <div class="form-group row">
        <div class="col-md-12">
            <button type="reset" class="btn btn-default btn-lg btn-block text-center text-uppercase">Valider </button>
        </div>
    </div>
    </form>
    </div>
    </div>
    </div>
</section>
<!--
<section class="banner-area relative" id="home">
<div class="overlay overlay-bg"></div>
<div class="container">
<div class="row d-flex align-items-center justify-content-center">
<div class="about-content col-lg-12">
<h1 class="text-white">
Support Teams
</h1>
<p class="text-white link-nav"><a href="index-2.html">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="team.html"> Teams</a></p>
</div>
</div>
</div>
</section>


<section class="team-area section-gap team-page-teams" id="team">
<div class="container">
<div class="row d-flex justify-content-center">
<div class="menu-content pb-70 col-lg-8">
<div class="title text-center">
<h1 class="mb-10">Experienced Mentor Team</h1>
<p>Who are in extremely love with eco friendly system.</p>
</div>
</div>
</div>
<div class="row justify-content-center d-flex align-items-center">
<div class="col-md-3 single-team">
<div class="thumb">
<img class="img-fluid" src="img/pages/t1.jpg" alt="">
<div class="align-items-center justify-content-center d-flex">
<a href="#"><i class="fa fa-facebook"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-linkedin"></i></a>
</div>
</div>
<div class="meta-text mt-30 text-center">
<h4>Ethel Davis</h4>
<p>Managing Director (Sales)</p>
</div>
</div>
<div class="col-md-3 single-team">
<div class="thumb">
<img class="img-fluid" src="img/pages/t2.jpg" alt="">
<div class="align-items-center justify-content-center d-flex">
<a href="#"><i class="fa fa-facebook"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-linkedin"></i></a>
</div>
</div>
<div class="meta-text mt-30 text-center">
<h4>Rodney Cooper</h4>
<p>Creative Art Director (Project)</p>
</div>
</div>
<div class="col-md-3 single-team">
<div class="thumb">
<img class="img-fluid" src="img/pages/t3.jpg" alt="">
<div class="align-items-center justify-content-center d-flex">
<a href="#"><i class="fa fa-facebook"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-linkedin"></i></a>
</div>
</div>
<div class="meta-text mt-30 text-center">
<h4>Dora Walker</h4>
<p>Senior Core Developer</p>
</div>
</div>
<div class="col-md-3 single-team">
<div class="thumb">
<img class="img-fluid" src="img/pages/t4.jpg" alt="">
<div class="align-items-center justify-content-center d-flex">
<a href="#"><i class="fa fa-facebook"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-linkedin"></i></a>
</div>
</div>
<div class="meta-text mt-30 text-center">
<h4>Lena Keller</h4>
<p>Creative Content Developer</p>
</div>
</div>
<div class="col-md-3 single-team">
<div class="thumb">
<img class="img-fluid" src="img/pages/t1.jpg" alt="">
<div class="align-items-center justify-content-center d-flex">
<a href="#"><i class="fa fa-facebook"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-linkedin"></i></a>
</div>
</div>
<div class="meta-text mt-30 text-center">
<h4>Ethel Davis</h4>
<p>Managing Director (Sales)</p>
</div>
</div>
<div class="col-md-3 single-team">
<div class="thumb">
<img class="img-fluid" src="img/pages/t2.jpg" alt="">
<div class="align-items-center justify-content-center d-flex">
<a href="#"><i class="fa fa-facebook"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-linkedin"></i></a>
</div>
</div>
<div class="meta-text mt-30 text-center">
<h4>Rodney Cooper</h4>
<p>Creative Art Director (Project)</p>
</div>
</div>
<div class="col-md-3 single-team">
<div class="thumb">
<img class="img-fluid" src="img/pages/t3.jpg" alt="">
<div class="align-items-center justify-content-center d-flex">
<a href="#"><i class="fa fa-facebook"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-linkedin"></i></a>
</div>
</div>
<div class="meta-text mt-30 text-center">
<h4>Dora Walker</h4>
<p>Senior Core Developer</p>
</div>
</div>
<div class="col-md-3 single-team">
<div class="thumb">
<img class="img-fluid" src="img/pages/t4.jpg" alt="">
<div class="align-items-center justify-content-center d-flex">
<a href="#"><i class="fa fa-facebook"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-linkedin"></i></a>
</div>
</div>
<div class="meta-text mt-30 text-center">
<h4>Lena Keller</h4>
<p>Creative Content Developer</p>
</div>
</div>
</div>
</div>
</section>


<section class="callaction-area relative section-gap">
<div class="overlay overlay-bg"></div>
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-10">
<h1 class="text-white">Experience Great Support</h1>
<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
</p>
<a class="callaction-btn text-uppercase" href="#">Reach Our Support Team</a>
</div>
</div>
</div>
</section>


<section class="feature-area section-gap" id="service">
<div class="container">
<div class="row d-flex justify-content-center">
<div class="col-md-8 pb-40 header-text">
<h1>What Services we offer to our clients</h1>
<p>
Who are in extremely love with eco friendly system.
</p>
</div>
</div>
<div class="row">
<div class="col-lg-4 col-md-6">
<div class="single-feature">
<h4><span class="lnr lnr-user"></span>Expert Technicians</h4>
<p>
Usage of the Internet is becoming more common due to rapid advancement of technology and power.
</p>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="single-feature">
<h4><span class="lnr lnr-license"></span>Professional Service</h4>
<p>
Usage of the Internet is becoming more common due to rapid advancement of technology and power.
</p>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="single-feature">
<h4><span class="lnr lnr-phone"></span>Great Support</h4>
<p>
Usage of the Internet is becoming more common due to rapid advancement of technology and power.
</p>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="single-feature">
<h4><span class="lnr lnr-rocket"></span>Technical Skills</h4>
<p>
Usage of the Internet is becoming more common due to rapid advancement of technology and power.
</p>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="single-feature">
<h4><span class="lnr lnr-diamond"></span>Highly Recomended</h4>
<p>
Usage of the Internet is becoming more common due to rapid advancement of technology and power.
</p>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="single-feature">
<h4><span class="lnr lnr-bubble"></span>Positive Reviews</h4>
<p>
Usage of the Internet is becoming more common due to rapid advancement of technology and power.
</p>
</div>
</div>
</div>
</div>
</section>  -->
<?php include("footer.php");
?>
