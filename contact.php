<?php
/**
 * Created by PhpStorm.
 * User: veerlekennes
 * Date: 15/09/16
 * Time: 17:12
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact - HE-CO CONSTRUCT</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="img-responsive">
<header>
    <div class="container">
        <div class="navbar-brand_">
            <img class="img-responsive" src="img/hecologo.png" alt="logo">
        </div>
    </div>

<div class="brand">HE-CO CONSTRUCT</div>
<div class="address-bar">3950 Bocholt | Kapelstraat 22 | 0657.916.950</div>

<!-- Navigation -->
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
            <a class="navbar-brand" href="index.html">HE-CO CONSTRUCT</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="about.html">About</a>
                </li>
                <li>
                    <a href="blog.html">News</a>
                </li>
                <li>
                    <a href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
</header>
<div class="container">

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Contacteer
                    <strong>HE-CO CONSTRUCT</strong>
                </h2>
                <hr>
            </div>
            <div class="col-md-8">
                <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2501.2576522135764!2d5.575718915848696!3d51.177473942592975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c0d48680e1366d%3A0xdf799af143c02811!2sKapelstraat+22%2C+3950+Bocholt!5e0!3m2!1snl!2sbe!4v1467202396509" width="700" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-md-4">
                <p>Tel.:
                <p><strong>0472 17 54 07</strong></p>
                <p><strong>0473 76 61 38</strong></p>
                </p>
                <p>Email:
                <p><strong><a href="mailto:dries@he-co-construct.be">dries@he-co-construct.be</a></strong></p>
                <p><strong><a href="mailto:gert@he-co-construct.be">gert@he-co-construct.be</a></strong></p>
                </p>
                <p>Adres:
                <p><strong>Kapelstraat 22</strong></p>
                <p><strong>3950 Bocholt</strong></p>
                <p><strong>België</strong></p>
                </p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Contact
                    <strong>Formulier</strong>
                </h2>
                <hr>
                <p>Voor verdere info en offerte-aanvragen kan u steeds vrijblijvend via onderstaand formulier een bericht sturen. Aarzel niet!</p>
                <?php

                

                if($_POST)
                {
                    if(($_POST['middelnaam'] == '')  && ($_POST['last_name'] != '') && ($_POST['first_name'] != '') && ($_POST['email'] != '')&&
                        ($_POST['phone'] != ''))
                    {

                        if($_FILES['fileToUpload']['name'] != '')
                        {
                            include ("upload.php");
                        }




                        $to      = 'veerlekennes@hotmail.com' . ', ';
                        $to      .= 'info@coodi.be';
                        $subject = 'Bericht via website';
                        $message = '
                                        
                                        Naam: '.$_POST['last_name'].'<br>
                                        Voornaam: '.$_POST['first_name'].'<br>
                                        Email: '.$_POST['email'].'<br><br>
                                        Telefoon: '.$_POST['phone'].'<br><br>
                                        Bericht: '.htmlspecialchars($_POST['message']).'<br>
                                        Bestand:<a href="http://veerlekennes.be/test/'.$target_file.'" >'.$target_file.'</a>';

                        $headers = 'From:'. $_POST['last_name'] .' '. $_POST['first_name'].' <info@coodi.be>'."\r\n" .
                            'Reply-To:'.$_POST['email'] . "\r\n" .
                            'Content-Type: text/html; charset=ISO-8859-1\r\n' . "\r\n" .
                            'X-Mailer: PHP/' . phpversion();

                        mail($to, $subject, $message, $headers);

                        $succes_messages = 'Uw bericht werd succesvol verzonden.';
                    }
                    else
                    {
                        $error_messages = 'Uw bericht werd niet verzonden omdat niet alle velden zijn ingevuld.';
                    }
                }

                ?>
                <form action="contact.php" method="post" enctype="multipart/form-data">


                    <?php

                    if($succes_messages != '')
                    {
                        echo '<div class="alert alert-success" role="alert">'.$succes_messages.'</div>';
                    }
                    if($error_messages != '')
                    {
                        echo '<div class="alert alert-danger" role="alert">'.$error_messages.'</div>';
                    }

                    ?>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <label>Naam
                            <input type="text" class="form-control" name="last_name" value=""   />
                            <input type="hidden" class="form-control" name="middelnaam" id="middelnaam">
                            </label>
                            <label>Voornaam
                                <input type="text" class="form-control" name="first_name" value=""   />
                                <input type="hidden" class="form-control" name="middelnaam" id="middelnaam">
                            </label>
                        </div>
                        <div class="form-group col-xs-12 ">
                            <label>Email
                            <input type="email" class="form-control" name="email"/>
                            </label>
                            <label>Telefoonnummer
                            <input type="tel" class="form-control" name="phone"/>
                            </label>
                        </div>
                        <div class="form-group col-xs-12 ">
                            <label for='photo' >Kies een bestand</label>
                            <input type="file" name="fileToUpload" id="fileToUpload">
                        </div>

                        <div class="clearfix"></div>
                        <div class="form-group col-lg-12">
                            <label>Bericht
                            <textarea class="form-control" rows="6" name="message"></textarea>
                            </label>
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="hidden" name="save" value="contact"/>
                            <button type="submit" class="btn btn-default">Verzenden</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- /.container -->

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <strong><p>Investeer in uw toekomst met HE-CO CONSTRUCT!</p></strong>
            </div>
        </div>
    </div>

    <!-- Footer Grijze balk -->
    <section id="footerRights">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <p>© All Rights Reserved</p>
                </div>
                <div class="col-md-5">
                    <ul class="quickMenu">
                        <li><a href="#" class="linkLeft">Site map</a></li>
                        <li><a href="#">Privacy policy</a></li>
                        <li><a href="#">Disclaimer</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Einde balk-->

</footer>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>

