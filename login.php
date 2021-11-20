<?php
$name = $_GET["name"];
$password = $_GET["password"];

// $user1, $user2, $password1, $password2 se nastavují v souboru config/env.php
if ($name == $user1 && $password == $password1) {
    setcookie('login', $name);
    setcookie('password', $password);
    header('Location: index.php');
} elseif($name == $user2 && $password == $password2) {
    setcookie('login', $name);
    setcookie('password', $password);
    header('Location: index.php');
}

include('nav.php');
echo head("Duolix - naučte se anglicky");
?>

<h1>PŘIHLÁŠENÍ</h1>


<p>PŘIHLÁŠENÍ SE NEPOVEDLO🤔</p>
</body>
</html>