
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


<?php $title = "eLearning"; 

include('../html/scripts.html');
?>

<body>
<style>

{ margin: 0; padding: 0; }

html { 
        background: url('img/finish.png') no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
}
</style>
</body>
</html>
