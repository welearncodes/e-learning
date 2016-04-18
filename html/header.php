<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $title; ?></title>
    <base href="http://localhost/e-learning/" target="_self" /> <!--se denne siden vis problemer http://stackoverflow.com/questions/1889076/is-it-recommended-to-use-the-base-html-tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="./css/style.css" rel="stylesheet" type="text/css">
    <link href="./css/cssConsole.console.css" type="text/css" rel="stylesheet">
    <!--<link href="css/chat.css" rel="stylesheet" type="text/css">
    <link href="css/chat.css" rel="stylesheet"/>
    <script src="js/jquery-1.6.4.min.js"></script>
    <script src="js/jquery-ui-1.11.4.js"></script>
    <script src="js/jquery.signalR-2.2.0.js"></script>
    <script src="js/json2.js"></script>
    <script src="js/jquery.tmpl.js"></script>
    <script src="js/jquery.cookie.js" type="text/javascript"></script>
    <script src="http://chat20160216024815.azurewebsites.net//signalr/hubs"></script>
    <script src="js/vClassroom.js"></script>
    <script id="new-message-template" type="text/x-jquery-tmpl">
        <li class="message" id="m-${id}">
            <strong>${name}:</strong>
            {{html message}}
        </li>
    </script>
    <script id="new-user-template" type="text/x-jquery-tmpl">
        <li class="user" id="u-${name}">
            <img src="http://www.gravatar.com/avatar/${hash}?s=16&d=mm" class="gravatar"/> ${name}
        </li>
    </script>
    -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script><script src="./js/jqevent.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    
</head>

<body>
  <header class=navbar-default>
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Git E-learning</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="menyen">
        <ul class="nav navbar-nav">
          <li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'init.php'){echo 'active'; }else { echo ''; } ?>"><a style="pointer-events: none; cursor: default;" href="#">init</a> </li>
          <li class="

          <?php if(basename($_SERVER['SCRIPT_NAME']) == 'add.php'){echo 'active'; }else { echo ''; } ?>">

          <a style="pointer-events: none; cursor: default;" href="#">add</a> </li>
          <li class="

          <?php if(basename($_SERVER['SCRIPT_NAME']) == 'status.php'){echo 'active'; }else { echo ''; } ?>"><a style="pointer-events: none; cursor: default;" href="#">status</a> </li>
          <li class="

          <?php if(basename($_SERVER['SCRIPT_NAME']) == 'commit.php'){echo 'active'; }else { echo ''; } ?>"><a style="pointer-events: none; cursor: default;" href="#">commit</a> </li>
          <li class="

          <?php if(basename($_SERVER['SCRIPT_NAME']) == 'push.php'){echo 'active'; }else { echo ''; } ?>"><a style="pointer-events: none; cursor: default;" href="#">push</a> </li>
          <li class="

          <?php if(basename($_SERVER['SCRIPT_NAME']) == 'pull.php'){echo 'active'; }else { echo ''; } ?>"><a style="pointer-events: none; cursor: default;" href="#">pull</a> </li>
          <li class="

          <?php if(basename($_SERVER['SCRIPT_NAME']) == 'cline.php'){echo 'active'; }else { echo ''; } ?>"><a style="pointer-events: none; cursor: default;" href="#">clone</a> </li>
          </ul>
       </div>
       </div>
</header>
       <!-- /.navbar-collapse -->

  
