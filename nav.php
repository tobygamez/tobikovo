<?php
function head($title){
    // Připojení
   

if (isset($_COOKIE["login"])) {
    $login = $_COOKIE["login"];
} else {
    $login = '';
}

    if (strlen($login) > 0) {
        $loginNav = 'Přihlášen jako ' . $login;
    } else {
        $loginNav = '<form action="login.php">
        <input type="text" name="name" placeholder="zadej jméno">
        <input type="password" name="password" placeholder="zadej heslo">
        <input type="submit" value="Přihlásit">
        </form>
        ';
    }

    $top = '<!DOCTYPE html>
    <html>
    
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <meta charset="utf-8">
        <title>' . $title . '</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon.png">

    </head>
    
    <body>
    <div class="container-fluid">   
        <div class="row">   
            <div class="col-6 logo"><img src="/images/logo-stranky.png" style="height: 60px"></div>
            <div class="col-6 right text-right">' . $loginNav . '</div>
        </div>
    </div>

    
    <nav class="nav nav-odkazy">
        <a class="nav-link active" href="index.php">Hlavní stránka</a>
        <a class="nav-link" href="videa.php">Videa</a>
        <a class="nav-link" href="duolix.php">Duolix</a>
        <a class="nav-link" href="script.php">Duolix pro přihlášené</a>
        <a class="nav-link" href="tipy.php">Tipy</a>
        <a class="nav-link" href="minecraft-server.php">Minecraft Server</a> 
        <a class="nav-link" href="spolupracovali.php">Spolupracovali</a>
        <a class="nav-link" href="http://lukasrobloxhry.sweb.cz/">Lukasrobloxhry</a>
        <a class="nav-link" href="https://caloris-chat-app.herokuapp.com/">Chat app</a>
        <a class="nav-link mr-auto" href="https://caloris.cz">Caloris.cz</a>
    </nav>
    
    <div class="page">';

        return $top;
}
?>
