<?php
/**
 * The Header for our theme.
 */
?><!DOCTYPE html>
<html>
<head>
  
	
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title><?php wp_title( '|', true, 'right' ); ?></title>
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">
    <!-- AngularJS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
  
    <!-- Custom styles for this template -->
    <link href="wp-content/themes/prevo/style.css" rel="stylesheet">
    <link href="wp-content/themes/prevo/navbar-fixed-top.css" rel="stylesheet">
    <link href="wp-content/themes/prevo/flat-ui.min.css" rel="sylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="wp-content/themes/prevo/animate.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<?php wp_head(); ?>
<script>	
  $(document).ready(function() {
    $("#home").click(function() {
      $('html, body').animate({
          scrollTop: $("#bottom").offset().top -50
      }, 2000);
    });
    
    $("body .navbar .navbar-toggle").click(function() {
      $("body #main").toggleClass('pushDown');
    });
  
  });
  </script>
</head>

<body ng-app="webApp"<?php body_class(); ?>>


	<header>
    
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top" id="thenav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <i class="fa fa-bars fa-3x"></i>
          </button>
          <div class="navbar-brand" href="#">
            <a href="#/home"><img src="wp-content/themes/prevo/images/letterhead.jpg"></a>
          </div>
        </div>
        <div id="navbar" class="col-sm-12 navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li id="home"><a href="#/home">MEET PAUL</a></li>
            <li id="about"><a href="#/issues">ISSUES</a></li>
            <li id="contact"><a href="#/contact">CONTACT</a></li>
            <li id="volunteer"><a href="#/volunteer">VOLUNTEER</a></li>
            <li id="donate"><a href="#/donate">DONATE</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

	</header>
 
