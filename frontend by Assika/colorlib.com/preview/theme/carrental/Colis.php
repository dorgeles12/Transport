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
                   Expédier un colis
                </h1>
                <a href="creer_compte.php" class="primary-btn text-uppercase"></a>
            </div>
            <div class="col-lg-5  col-md-6 header-right">
                <h4 class="text-white pb-30">Veuillez remplir ce formulaire</h4>
                <form class="form" role="form" autocomplete="off" style="height: 300px;" ">
                <div class="form-group">
                  <!--  <input class="form-control txt-field" type="text" name="name" placeholder="nom de l'entreprise">
                    <input class="form-control txt-field" type="email" name="email" placeholder="contact">  -->
                    <div class="form-group">
                        <div class="default-select" id="default-select" ">
                        <select class="form-control">
                            <option value="" disabled selected hidden>type de colis</option>
                            <option value="1">Courrier</option>
                            <option value="1">Marchandise</option>
                            <option value="1"></option>

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
                            <option value="" disabled selected hidden>Nombre de place</option>
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

<?php include("footer.php");
?>
