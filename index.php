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
				<p class="white paragraph text-center" style="margin-bottom: 10px;">Organising KTHack will be awesome, we're looking for a small group of amazing and dedicated students to join our team! KTHack will be KTH very first student hackathon, 24 hours of coding and fun in Stockholm. Happening in January 2020, we need you to make it possible. Contact us at <a href="mailto:">contact@kthack.com</a> if you have any questions.</p>
				<p class="white paragraph text-center">Application deadline is <b>Sunday, June 2nd</b>.</p>
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
                        echo "<p class=\"white bold margin-0 text-center\">Internal error, please write to <a href=\"mailto:contact@kthack.com\" class=\"link-white bold\">contact@kthais.com</a>!</p></div><div class=\"col-sm-3\"></div></div></div></header>";
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
                    <input type="submit" id="apply-now" value="Apply now">
                </div>
            </div>
	      	<div class="col-sm-3">
            </div>
        </div>
    </div>
</header>

<div id="form" class="container join-form" onsubmit="return validateForm()" style="margin-top: 100vh;">
	<div class="row join-form-row">
        <h2 class="white bold join-title">Application form</h2>
      	<div class="col-sm-1">
        </div>
      	<div class="col-sm-10">
            <p id="missing-fields" class="white missing-hide" style="text-align: center; margin-top: 50px;">It seems some of the fields were left or had the wrong content, please check you've filled everything correctly!</p>
            <form action="register/" method="post" id="form-join" class="submission-form text-center">
	            <div class="row">
                    <h3 class="white bold text-center join-section">Contact information</h3>
      	            <div class="col-sm-12 join-subrow">
          	            <div class="col-sm-6">
                            <label for="name" id="label-name">What's your name?</label>
	                    </div>
          	            <div class="col-sm-6">
                            <input type="text" name="name" id="input-name" placeholder="Elliot">
	                    </div>
	                </div>
      	            <div class="col-sm-12 join-subrow">
          	            <div class="col-sm-6">
                            <label for="surname" id="label-surname">And your surname?</label>
	                    </div>
          	            <div class="col-sm-6">
                            <input type="text" name="surname" id="input-surname" placeholder="Alderson">
	                    </div>
	                </div>
      	            <div class="col-sm-12 join-subrow">
          	            <div class="col-sm-6 join-subrow">
                            <label for="email" id="label-email">And finally, your email?</label>
	                    </div>
          	            <div class="col-sm-6 join-subrow">
                            <input type="text" name="email" id="input-email" placeholder="mr.robot@kthack.com">
	                    </div>
	                </div>
	            </div>
	            <div class="row join-row">
                    <h3 class="white bold text-center join-section">About you</h3>
      	            <div class="col-sm-12 join-subrow">
          	            <div class="col-sm-6">
                            <label for="major" id="label-major">What are you studying?</label>
	                    </div>
          	            <div class="col-sm-6">
                            <input type="text" name="major" id="input-major" placeholder="Hacking management">
	                    </div>
	                </div>
      	            <div class="col-sm-12 join-subrow">
          	            <div class="col-sm-6">
                            <label for="year">What year are you in?</label>
	                    </div>
          	            <div class="col-sm-6 white-text" style="text-align: left;">
              	            <div class="radio" style="margin-right: 20px; margin-top: 6px; margin-bottom: 6px; display: inline-block;">
                                <input type="radio" name="year" value="1" checked><label for="year" class="white">1</label>
	                        </div>
              	            <div class="radio" style="margin-right: 20px; margin-top: 6px; margin-bottom: 6px; display: inline-block;">
                                <input type="radio" name="year" value="2"><label for="year" class="white">2</label>
	                        </div>
              	            <div class="radio" style="margin-right: 20px; margin-top: 6px; margin-bottom: 6px; display: inline-block;">
                                <input type="radio" name="year" value="3"><label for="year" class="white">3</label>
	                        </div>
              	            <div class="radio" style="margin-top: 6px; margin-bottom: 6px; display: inline-block;">
                                <input type="radio" name="year" value="4"><label for="year" class="white">4 or more</label>
	                        </div>
	                    </div>
	                </div>
      	            <div class="col-sm-12 join-subrow">
          	            <div class="col-sm-6">
                            <label for="event" id="label-event">Have you organised any similar event?</label>
	                    </div>
          	            <div class="col-sm-6">
                            <input type="text" name="event" id="input-event" placeholder="Yes! I've been helping Allsafe with some malware...">
	                    </div>
	                </div>
      	            <div class="col-sm-12 join-subrow">
          	            <div class="col-sm-6">
                            <label for="involved">What do you most want to be involved in?<br><span style="font-weight: 100;font-size: 14px;">You can select more than one option</span></label>
	                    </div>
          	            <div class="col-sm-6 white-text" style="text-align: left;">
              	            <div class="radio-check" style="margin-right: 20px; margin-top: 6px; margin-bottom: 0px; width: 100%; display: inline-block;">
                                <input type="checkbox" name="involved-0" value="sponsorship"><label for="involved" class="white" style="float: left; text-align: left;"><b>Sponsorship</b>: Persuasive, good writing, both Swedish and English. Come raise <i>lots of moneys</i>.</label>
	                        </div>
              	            <div class="radio-check" style="margin-right: 20px; margin-top: 0px; margin-bottom: 0px; width: 100%; display: inline-block;">
                                <input type="checkbox" name="involved-1" value="design"><label for="involved" class="white" style="float: left; text-align: left;"><b>Design</b>: Do you design logos for fun? Can you design experiences for your users?</label>
	                        </div>
              	            <div class="radio-check" style="margin-right: 20px; margin-top: 0px; margin-bottom: 0px; width: 100%; display: inline-block;">
                                <input type="checkbox" name="involved-2" value="logistics"><label for="involved" class="white" style="float: left; text-align: left;"><b>Logistics</b>: Do you work well under pressure? Are you a hustler? Help us keep everything running really smoothly.</label>
	                        </div>
              	            <div class="radio-check" style="margin-right: 20px; margin-top: 0px; margin-bottom: 0px; width: 100%; display: inline-block;">
                                <input type="checkbox" name="involved-3" value="marketing"><label for="involved" class="white" style="float: left; text-align: left;"><b>Marketing</b>: Are you a Facebook/Twitter genius?</label>
	                        </div>
              	            <div class="radio-check" style="margin-right: 20px; margin-top: 0px; margin-bottom: 0px; width: 100%; display: inline-block;">
                                <input type="checkbox" name="involved-4" value="webdev"><label for="involved" class="white" style="float: left; text-align: left;"><b>WebDev</b>: Do you like making web apps on your free time? Frontend or backend? Help us build eveything we need.</label>
	                        </div>
              	            <div class="radio-check" style="margin-right: 20px; margin-top: 0px; margin-bottom: 0px; width: 100%; display: inline-block;">
                                <input type="checkbox" name="involved-5" value="staff"><label for="involved" class="white" style="float: left; text-align: left;"><b>Staff</b>: Can you boss around and make things happen? A lot of pressure and volunteer management.</label>
	                        </div>
              	            <div class="radio-check" style="margin-top: 0px; margin-bottom: 6px; width: 100%; display: inline-block;">
                                <input type="checkbox" name="involved-6" value="hackerxperience"><label for="involved" class="white" style="float: left; text-align: left;"><b>HackerXperience</b>: Do you love hackathons? Do you have great ideas to <i>make KTHack great <span style="text-decoration: line-through;">again</span> for the first time</i>?</label>
	                        </div>
	                    </div>
	                </div>
      	            <div class="col-sm-12 join-subrow">
          	            <div class="col-sm-6">
                            <label for="similar" id="label-similar">Have you done anything similar to the above? Why do you want to do those things at KTHack?</label>
	                    </div>
          	            <div class="col-sm-6">
                            <input type="text" name="similar" id="input-similar" placeholder="Yes! I've been managing people in a secret society...">
	                    </div>
	                </div>
      	            <div class="col-sm-12 join-subrow">
          	            <div class="col-sm-6">
                            <label for="confidence">How much confidence do you have in speaking English?</label>
	                    </div>
          	            <div class="col-sm-6 white-text" style="text-align: left;">
              	            <div class="radio" style="margin-right: 20px; margin-top: 6px; margin-bottom: 6px; display: inline-block;">
                                <input type="radio" name="confidence" value="0" checked><label for="year" class="white">0</label>
	                        </div>
              	            <div class="radio" style="margin-right: 20px; margin-top: 6px; margin-bottom: 6px; display: inline-block;">
                                <input type="radio" name="confidence" value="1"><label for="year" class="white">1</label>
	                        </div>
              	            <div class="radio" style="margin-right: 20px; margin-top: 6px; margin-bottom: 6px; display: inline-block;">
                                <input type="radio" name="confidence" value="2"><label for="year" class="white">2</label>
	                        </div>
              	            <div class="radio" style="margin-right: 20px; margin-top: 6px; margin-bottom: 6px; display: inline-block;">
                                <input type="radio" name="confidence" value="3"><label for="year" class="white">3</label>
	                        </div>
              	            <div class="radio" style="margin-right: 20px; margin-top: 6px; margin-bottom: 6px; display: inline-block;">
                                <input type="radio" name="confidence" value="4"><label for="year" class="white">4</label>
	                        </div>
              	            <div class="radio" style="margin-top: 6px; margin-bottom: 6px; display: inline-block;">
                                <input type="radio" name="confidence" value="5"><label for="year" class="white">5</label>
	                        </div>
	                    </div>
	                </div>
      	            <div class="col-sm-12 join-subrow">
          	            <div class="col-sm-6">
                            <label for="linkedin" id="label-linkedin">Do you have LinkedIn?</label>
	                    </div>
          	            <div class="col-sm-6">
                            <input type="text" name="linkedin" id="input-linkedin" placeholder="https://linkedin.com/in/fsociety">
	                    </div>
	                </div>
      	            <div class="col-sm-12 join-subrow">
          	            <div class="col-sm-6">
                            <label for="github" id="label-github">Do you have GitHub?</label>
	                    </div>
          	            <div class="col-sm-6">
                            <input type="text" name="github" id="input-github" placeholder="https://github.com/fsociety">
	                    </div>
	                </div>
      	            <div class="col-sm-12 join-subrow">
          	            <div class="col-sm-6">
                            <label for="website" id="label-website">Do you have webiste or portfolio?</label>
	                    </div>
          	            <div class="col-sm-6">
                            <input type="text" name="website" id="input-website" placeholder="https://fsociety.org">
	                    </div>
	                </div>
      	            <div class="col-sm-12 join-subrow">
          	            <div class="col-sm-6">
                            <label for="description" id="label-description">Describe yourself!</label>
	                    </div>
          	            <div class="col-sm-6">
                            <input type="text" name="description" id="input-description" placeholder="I'm a senior network engineer at Allsafe Cybersecurity and a vigilante hacker...">
	                    </div>
	                </div>
      	            <div class="col-sm-12 join-subrow">
          	            <div class="col-sm-6">
                            <label for="extra">Do you have something else you would like us to know?</label>
	                    </div>
          	            <div class="col-sm-6">
                            <input type="text" name="extra" id="extra" placeholder="I've been framed by the FBI to fill this form!">
	                    </div>
	                </div>
	            </div>
	            <div class="row join-row-last">
      	            <div class="col-sm-12 checkbox" id="div-policies">
                        <input type="checkbox" name="policies" id="input-policies" value="accept"><label for="policies" id="label-policies" class="white" style="float: unset;padding: inherit;vertical-align: unset;">I read, understand and accept the <a href="policy" class="link-white bold">policy</a>.</label>
	                </div>
	            </div>
	            <div class="row">
      	            <div class="col-sm-12">
                        <input type="submit" value="Submit">
	                </div>
	            </div>
            </form>
        </div>
      	<div class="col-sm-1">
        </div>
	</div>
</div>
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

