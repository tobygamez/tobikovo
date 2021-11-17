<?php
include('nav.php');
echo head("English");


$res = $db->query("SELECT * FROM english ORDER BY vyslovnost DESC");
?>

<h1 title="angličtina">English </h1>


<h2>Slovníček</h2>

<br>
        <br>


<table>
<tr>
                <th>cizí slovo</th>
                <th>překlad</th>
                <th>výslovnost</th>
            </tr>
<?php
foreach ($res as $row) {
    echo '
    <tr>
    <td>' . $row["cizi_slovo"] . '</td>
    <td>' . $row["preklad"] .'</td>
    <td>' . $row["vyslovnost"] .'</td>
    </tr>';
}
?>
</table>


       <table>
            <tr>
                <td>dog</td>
                <td>pes</td>
                <td style="font-style: italic;">dog</td>
            </tr>
            <tr>
                <td>cat</td>
                <td>kočka</td>
                <td style="font-style: italic;">ket </td>
            </tr>
            <tr>
                <td>fence</td>
                <td>plot</td>
                <td style="font-style: italic;">fens</td>
            </tr>
            <tr>
                <td>gate</td>
                <td>brána</td>
                <td style="font-style: italic;">gejt</td>
            </tr>
            <tr>
                <td>cloud</td>
                <td>mrak</td>
                <td style="font-style: italic;">klaud</td>
            </tr>
            <tr>
                <td>glass</td>
                <td>sklo</td>
                <td style="font-style: italic;">glás</td>
            </tr>
            <tr>
                <td>chicken</td>
                <td>kuře</td>
                <td style="font-style: italic;">čikn</td>
            </tr>
            <tr>
                <td>cow</td>
                <td>kráva</td>
                <td style="font-style: italic;">kau</td>
            </tr>
            <tr>
                <td>tea</td>
                <td>čaj</td>
                <td style="font-style: italic;">tí</td>
            </tr>
            <tr>
                <td>bat</td>
                <td>netopýr</td>
                <td style="font-style: italic;">bet</td>
            </tr>
            <tr>
                <td>ice</td>
                <td>led</td>
                <td style="font-style: italic;">ajs</td>
            </tr>
            <tr>
                <td>fire</td>
                <td>táborák</td>
                <td style="font-style: italic;">fajr</td>
            </tr>
            <tr>
                <td>powder</td>
                <td>prášek</td>
                <td style="font-style: italic;">paudr</td>
            </tr>
            <tr>
                <td>wood</td>
                <td>dřevo</td>
                <td style="font-style: italic;">wůdd</td>
            </tr>
            <tr>
                <td>iron</td>
                <td>železo</td>
                <td style="font-style: italic;">ajron</td>
            </tr>
            <tr>
                <td>gold</td>
                <td>zlato</td>
                <td style="font-style: italic;">gold</td>
            </tr>
            <tr>
                <td>diamond</td>
                <td>diamant</td>
                <td style="font-style: italic;">dajmond</td>
            </tr>
            <tr>
                <td>coal</td>
                <td>uhlí</td>
                <td style="font-style: italic;">koul</td>
            </tr>
        </table>

        <br>
        <br>

        <h2>Minecraft obrázek</h2>

        <img
            src="https://gamepedia.cursecdn.com/minecraft_cs_gamepedia/thumb/3/32/Template1.png/525px-Template1.png?version=246ffd9cf6f5cef95e8627ab826e883d">


    </div>


</body>
