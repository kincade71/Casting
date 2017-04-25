<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url() ?>/bower_components/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  <!-- jQueryUI CSS-->
  <link rel="stylesheet" href="<?= base_url() ?>/bower_components/jquery-ui/themes/smoothness/jquery-ui.min.css">
  </head>
  <body role="document">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?= base_url(); ?>"><?= $title ?></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <?php
              if($this->session->userdata('logged_in')){ ?>
              <ul class="nav navbar-nav">
                <li><a href="<?= base_url()?>cast">Add</a></li>
                <li><a href="<?= base_url()?>feed">Feed</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right" >
              <li class="dropdown ">
                <a href="#" class="dropdown-toggle navbar-right" data-toggle="dropdown" ><img src="<?= gravatar($this->session->userdata('email'), 21,false )?>" class="img-rounded img-responsive pull-left"> <span class="caret"></span></a>
                <ul class="dropdown-menu " role="menu">
                  <!--<li><a href="/sid/profile"><?= $this->session->userdata('username'); ?> Profile</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>-->
                  <li ><a href="<?= base_url() ?>loginuser/logout">Logout <?= $this->session->userdata('username'); ?></a></li>
                </ul>
              </li>
            </ul>
              <? }else{ ?>
              <ul class="nav navbar-nav navbar-right">
                <li><a class="navbar-right" href="<?= base_url(); ?>loginuser">Login</a></li>
              </ul>
              <? } ?>
            </div><!--/.nav-collapse -->
          </div>
        </nav>
