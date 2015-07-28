<!DOCTYPE html>
<html>
  <head>
  <link rel="icon" 
      type="image/png" 
      href="<?php echo base_url('uiux/img/favicon.png');?>">
    <title>KaizenMed</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('uiux/uikit/css/uikit.css');?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('uiux/uikit/css/uikit.gradient.css');?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('uiux/bower_components/fullcalendar/dist/fullcalendar.css');?>"/>
    <script type="text/javascript" src="<?php echo base_url('uiux/bower_components/jquery/dist/jquery.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('uiux/uikit/js/uikit.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('uiux/bower_components/moment/moment.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('uiux/bower_components/fullcalendar/dist/fullcalendar.js');?>"></script>

    <!-- calendar plugin -->
    <script type="text/javascript" src="<?php echo base_url('uiux/js/calendar.js')?>"></script>
    <link rel='stylesheet' href='<?php echo base_url('uiux/css/jquery-ui-theme.min.css')?>' />
  </head>

  <!-- top navigation bar -->
  <nav class="uk-navbar data-uk-sticky">
    <a href="#" class="uk-navbar-brand"></a>
  </nav>

  <!-- This is the off-canvas sidebar -->
  <div id="side-bar" class="uk-offcanvas">
    <div class="uk-offcanvas-bar">
      <ul class="uk-nav uk-nav-offcanvas uk-nav-parent-icon">
        <li class="uk-nav-divider"></li>
        <li class="uk-nav-header">KaizenMed e-Clinic</li>
        <li class="uk-nav-divider"></li>
        <li><a href="<?php echo base_url('dashboard');?>"><i class="uk-icon-calendar-o"></i>  Calendar</a></li>
        <li><a href="<?php echo base_url('dashboard/clients/');?>"><i class="uk-icon-group"></i>  Clients</a></li>
        <li><a href="<?php echo base_url('auth/log_out/');?>"><i class="uk-icon-sign-out"></i>  Log Out</a></li>
        <li class="uk-nav-divider"></li>
        <li class="uk-nav-header">User Details</li>
        <li class="uk-nav-header"><i class="uk-icon-user"></i>  <?php echo $this->session->details;?></li>
        <li class="uk-nav-header"><i class="uk-icon-lock"> <?php echo $this->session->userlevel;?></i></li>
      </ul>

    </div>
  </div>



