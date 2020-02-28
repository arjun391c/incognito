<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $title ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Incognito - Online treasure hunt of Hestia 19 - National level Techno Cultural fest organized by TKM College of Engineering.">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="keywords" content="incognito,treasurehunt,hestia,hestia19,tkmce,hestiatkm,hestiatkmce,conjura,fest,event,technical,cultural,technocultural">
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-135958084-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-135958084-1');
        </script>

   <link rel="icon" href="<?php echo base_url('assets/img/logo.png')?>">

   <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
   <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">
     <link href="<?php echo base_url('assets/css/incognitostyle.css') ?>" rel="stylesheet">

   <script  src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
   <script  src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
   <script  src="<?php echo base_url('assets/js/init.js') ?>"></script>
   <link href="https://fonts.googleapis.com/css?family=Expletus+Sans:400,500,600,700" rel="stylesheet">

</head>
<body class="back">	
<nav class="opac navbar navbar-inverse " role="navigation">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse"
data-target=".navbar-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="<?php echo base_url()?>" title="Incognito">
	<img class="navlogo" src="<?php echo base_url('assets/img/logo.png') ?>">
</a>
</div>
<div class="collapse navbar-collapse" >
<ul class="nav navbar-nav">
<li class=" Dagger600 <?php echo $acthome ?>"><a href="<?php echo base_url()?>">Home</a></li>
<li class="Dagger600 <?php echo $actleaderboard ?>"><a href="<?php echo base_url('index.php/leaderboard')?>">Leaderboard</a></li>
<li class="Dagger600 " style="margin: 16px;color: #777777;">
    Clues
</li>
<li class="Dagger600" style="margin-left: 0px;">
  <a href="https://instagram.com/incognito.hestia" target="_blank"><i class="fa fa-instagram"></i></a>
</li>
<li class="Dagger600" style="margin-left: 0px;">
  <a href="https://www.facebook.com/incognito.hestia" target="_blank"><i class="fa fa-facebook-f"></i></a>
</li>

<li class="Dagger600 <?php echo $actrules ?>"><a href="<?php echo base_url('index.php/rules')?>">Rules</a></li>
<?php
$this->load->library('session');
$user_id=$this->session->userdata('userid');
if($user_id!=FALSE) : ?>
<li class="Dagger600 <?php echo $actprof ?>"><a href="<?php echo base_url('index.php/profile')?>">Profile</a></li>
<li class="Dagger600"><a href="https://www.instagram.com/p/Bu_ow15nWvx/?utm_source=ig_share_sheet&igshid=xyarmd307bjh" target="_blank">Iphone X Giveaway</a></li>

</ul>
<ul class="nav navbar-nav navbar-right" >
<li class="Dagger "><a href="<?php echo base_url('index.php/logout')?>">Logout</a></li>
</ul>
<?php endif ?>
</div>
</nav>

