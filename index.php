<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css?_=1554313746">
    <link rel="stylesheet" href="assets/css/join.css?_=1554313746">
    <meta name="theme-color" content="#68a4cc">
    <meta name="author" content="KTHack">
    <link rel="icon" type="image/x-icon" href="favicon.ico"/>
    <link rel="icon" href="favicon.png" type="image/png">
    <meta name="description" content="KTH hackathon, organised by KTH Artificial Intelligence Society">


    <!--FACEBOOK DESCRIPTION -->
    <meta property="og:title" content="Join us | KTHack"/>
    <meta property="og:site_name" content="KTHack"/>
    <meta property="og:description" content="KTH hackathon, organised by KTH Artificial Intelligence Society"/>
    <meta property="og:image" content="http://soon.kthack.com/overview.png">
	<meta property="og:image:secure_url" content="https://soon.kthack.com/overview.png">
	<meta property="og:url" content="http://soon.kthack.com">

    <!--TWITTER DESCRIPTION -->
	<meta name="twitter:card" content="summary">

	<meta name="twitter:title" content="Join us | KTHack">
	<meta name="twitter:description" content="KTH hackathon, organised by KTH Artificial Intelligence Society">
	<meta name="twitter:image" content="http://soon.kthack.com/overview.png">


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <title>Join us | KTHack</title>
</head>

<body>
<header class="centered">
	<div class="container">
		<div class="row">
	      	<div class="col-sm-3">
            </div>
	      	<div class="col-sm-6">
	      	    <a href=""><img src="assets/img/logo_white.png" class="logo"></a>
            </div>
	      	<div class="col-sm-3">
            </div>
		</div>
		<div class="row">
	      	<div class="col-sm-3">
            </div>
	      	<div class="col-sm-6">
				<h1 class="white bold text-center" style="margin-bottom: 15px;">Apply for organiser!</h1>
				<p class="white paragraph text-center" style="margin-bottom: 10px;">Organising KTHack will be awesome, we're looking for a small group of amazing and dedicated students to join our team! KTHack will be KTH very first student hackathon, 24 hours of coding and fun in Stockholm. Happening in January 2020, we need you to make it possible. Contact us at <a href="mailto:" class="link-white bold">contact@kthack.com</a>.</p>
                <?php
                    session_start();
                    if(isset($_SESSION["status"]) && ($_SESSION["status"] == "done")){
                        echo "<p class=\"white bold margin-0 text-center\">Thank-you for applying, remember to check your inbox (and spam) to confirm your email!</p></div><div class=\"col-sm-3\"></div></div></div></header>";
                        $_SESSION["status"] = "initial";
                    }
                    else if(isset($_SESSION["status"]) && ($_SESSION["status"] == "activated")){
                        echo "<p class=\"white bold margin-0 text-center\">Your email has been confirmed, thank-you!</p></div><div class=\"col-sm-3\"></div></div></div></header>";
                    }
                    else if(isset($_SESSION["status"]) && ($_SESSION["status"] == "database")){
                        echo "<p class=\"white bold margin-0 text-center\">Internal error, please write to <a href=\"mailto:contact@kthack.com\" class=\"link-white bold\">contact@kthack.com</a>!</p></div><div class=\"col-sm-3\"></div></div></div></header>";
                    }
                    else if(isset($_SESSION["status"]) && ($_SESSION["status"] == "registered")){
                        echo "<p class=\"white bold margin-0 text-center\">You have already applied, but the email hasn't been confirmed yet, check the spam folder!</p></div><div class=\"col-sm-3\"></div></div></div></header>";
                    }
                    else if(isset($_SESSION["status"]) && ($_SESSION["status"] == "confirmed")){
                        echo "<p class=\"white bold margin-0 text-center\">You are already applied and confirmed!</p></div><div class=\"col-sm-3\"></div></div></div></header>";
                    }
                    else if(isset($_SESSION["status"]) && ($_SESSION["status"] == "code")){
                        echo "<p class=\"white bold margin-0 text-center\">The link provided is invalid!</p></div><div class=\"col-sm-3\"></div></div></div></header>";
                    }
                    else{
                ?>
  	            <div class="submission-form join-button">
                    <input type="submit" id="apply-now" value="Applications closed">
                </div>
            </div>
	      	<div class="col-sm-3">
            </div>
        </div>
    </div>
</header>

<?php
    }
    $_SESSION["status"] = "initial";
?>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.1/moment.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
<script src="assets/js/events.js?_=1554313746"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-137575645-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-137575645-1');
</script>

<script type="text/javascript">
    $("#apply-now").click(function(){
        $('html, body').animate({
            scrollTop: $("#form").offset().top
        }, 'slow');
        // window.location = "#form";
    });

    function scrollTo(id){
        $('html, body').animate({
            scrollTop: $(id).offset().top
        }, 'slow');
    }
    
    function markEmailAsBadFormatted(id){
        var required = "This field has the wrong format!";
        $(id)[0].value = "";
        $(id)[0].oldPlaceholder = $(id)[0].placeholder;
        $(id)[0].placeholder = required;
        $(id).addClass('input-required');
    }
    
    function markAsRequired(id){
        var required = "This field is mandatory!";
        $(id)[0].value = "";
        $(id)[0].oldPlaceholder = $(id)[0].placeholder;
        $(id)[0].placeholder = required;
        $(id).addClass("input-required");
    }
    
    function markPoliciesAsRequired(id){
        var required = "<span id=\"required-policies\" class=\"white\" style=\"font-weight: 100;font-size: 14px;\"><br>You must accept the policy in order to apply!</span>";
        $(id)[0].innerHTML += required;
    }
    
    function validateEmail(email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }

    function cleanOldMarked(id){
        for(i=0; i<$(id)[0].length; ++i){
            if($(id)[0][i].oldPlaceholder != undefined){
                $(id)[0][i].placeholder = $(id)[0][i].oldPlaceholder;
                $(id)[0][i].oldPlaceholder = undefined;
            }
            if($(id)[0][i].id != ""){
                $("#" + $(id)[0][i].id).removeClass("input-required");
            }
        }
        $("#required-policies").remove()
    }
    
    function validateForm() {
        errors = false;
        cleanOldMarked("#form-join");
        if(document.forms["form-join"]["name"].value == ""){
            markAsRequired("#input-name");
            errors = true;
        }
        if(document.forms["form-join"]["surname"].value == ""){
            markAsRequired("#input-surname");
            errors = true;
        }
        if(!validateEmail(document.forms["form-join"]["email"].value)){
            markEmailAsBadFormatted("#input-email");
            errors = true;
        }
        if(document.forms["form-join"]["major"].value == ""){
            markAsRequired("#input-major");
            errors = true;
        }
        if(document.forms["form-join"]["event"].value == ""){
            markAsRequired("#input-event");
            errors = true;
        }
        if(document.forms["form-join"]["similar"].value == ""){
            markAsRequired("#input-similar");
            errors = true;
        }
        if(document.forms["form-join"]["description"].value == ""){
            markAsRequired("#input-description");
            errors = true;
        }
        if(!(document.forms["form-join"]["policies"].checked)){
            markPoliciesAsRequired("#div-policies");
            errors = true;
        }
        if(errors){
            $("#missing-fields").removeClass("missing-hide");
            scrollTo("#form");
        }
        return !errors;
    } 
</script>

</body>
</html>

