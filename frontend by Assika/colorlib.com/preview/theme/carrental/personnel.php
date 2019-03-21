<?php include("header.php");
include("menu.php");
?>

<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-center">
            <div class="banner-content col-lg-7 col-md-6 ">
                <h6 class="text-white "> </h6>
                <h1 class="text-white text-uppercase">
                   Reserver un véhicule pour votre entreprise
                </h1>
                <a href="creer_compte.php" class="primary-btn text-uppercase"></a>
            </div>
            <div class="col-lg-5  col-md-6 header-right">
                <h4 class="text-white pb-30">Veuillez remplir ce formulaire</h4>
                <form class="form" role="form" autocomplete="off" style="height: 300px;" ">
                <div class="form-group">
                    <input class="form-control txt-field" type="text" name="name" placeholder="nom de l'entreprise">
                    <input class="form-control txt-field" type="email" name="email" placeholder="contact">
                    <div class="form-group">
                        <div class="default-select" id="default-select" ">
                        <select class="form-control">
                            <option value="" disabled selected hidden>ville de depart</option>
                            <option value="1">Bouake</option>
                            <option value="1">korhogo</option>
                            <option value="1">abidjan</option>
                            <option value="1">Pickup Four</option>
                        </select>
                    </div><br>
                    <div class="form-group">
                        <div class="default-select" id="default-select" ">
                        <select class="form-control">
                            <option value="" disabled selected hidden>Destination</option>
                            <option value="1">Bouake</option>
                            <option value="1">korhogo</option>
                            <option value="1">abidjan</option>
                            <option value="1">Pickup Four</option>
                        </select>
                    </div><br>
                    <div class="form-group">
                        <div class="default-select" id="default-select" ">
                        <select class="form-control">
                            <option value="" disabled selected hidden>Nombrre de place</option>
                            <option value="1">25</option>
                            <option value="1">40</option>
                            <option value="1">60</option>
                            <option value="1"> 80</option>
                        </select>
                    </div><br>

                    <div class="form-group row">
                        <div class="col-md-12">
                            <a href="service_proposer.php" type="submit" class="btn btn-default btn-lg btn-block text-center text-uppercase">valider vos opérations</a>
                        </div>
                    </div>
                </div>
                </form>
            </div>

        </div>

    </div>
    </div>
    </div>
    </div>
</section> -->
<!--
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-center">
            <div class="banner-content col-lg-7 col-md-6 ">
                <h6 class="text-white ">plateform de gestion des des compagnies de transport </h6>
                <h1 class="text-white text-uppercase">
                    Reserver un véhicule pour votre entreprise
                </h1>

                <a href="#" class="primary-btn text-uppercase">Rent Car Now</a>
            </div>
            <div class="col-lg-5  col-md-6 header-right">
                <h4 class="text-white pb-30"></h4>
                <form class="form" role="form" autocomplete="off">


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
-->
<?php include("footer.php");
?>
