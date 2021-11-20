<?php
include('nav.php');
echo head("Videa");
?>
<h1>Videa</h1>

 
<h2>Lukasrobloxhry</h2>

<?php
// Opakování videa - lukas ***************************************

 $videa  = [
 // zatím tady nejsou žádná videa - taky nikdo nic netočí
     
 ];

for ($a = 0; $a < count($videa); $a++) {
        echo '
        <iframe width="560" height="315" src="https://www.youtube.com/embed/' . $videa[$a] . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p>Odkaz tady: <a href="https://www.youtube.com/embed/' . $videa[$a] . '" autoload="lazy">Youtube.com</a></p>

            <br><br>
        ';
}
?>


<h2>Bauchyč</h2>

<?php
// Opakování videa - lukas ***************************************

 $videa  = [
     'Y6jnCafjZWY',
     'tsr6McHTfgo',
     'EdEgSVUEyt4',
     'PAMmUbZ2K0c',
     'w-z0Dwe5918',
     'EVzZNdkEBT0',
     'gFE-qKGcSwk',
     '1Xt_YP9hBWs',
     'FWY_JZpV3p4',
     'GmBKt3XZa9s',
    
 ];

for ($a = 0; $a < count($videa); $a++) {
        echo '
        <iframe width="560" height="315" src="https://www.youtube.com/embed/' . $videa[$a] . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p>Odkaz tady: <a href="https://www.youtube.com/embed/' . $videa[$a] . '">Youtube.com</a></p>

            <br><br>
        ';
}
?>


<h2>McCitron</h2>

<?php
// Opakování videa - lukas ***************************************

 $videa  = [
     'sSbaUO8XRjo',
     'Nx8CWk6dx2Y',
     'h6QZ3CjK9u0',
     'OyB1Bo9GWGA',
     '_bYwaCu9S0k',
     '9tYEftOf_BY',
     'yxWNWNpYBP0',
     'sfSZqiw4-so',
     'sYbbp6OKQsQ',
     'SrG8BJgGQcc',
     'QmoBsPTmjzM',
     '8f5LQubnB4I',
     'J0Zo1uqW-rk',
     '4qifVN2y6fk',
     'u0pc8PNQD3I'
    
 ];

for ($a = 0; $a < count($videa); $a++) {
        echo '
        <iframe width="560" height="315" src="https://www.youtube.com/embed/' . $videa[$a] . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p>Odkaz tady: <a href="https://www.youtube.com/embed/' . $videa[$a] . '">Youtube.com</a></p>

            <br><br>
        ';
}
?>

</div>
</body>