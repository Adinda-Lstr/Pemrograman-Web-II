<html>
<head>
    <style>
        table, td { border: 1px solid black; }
        .merah { background-color: red; font-weight: bold; height: 50px; }
    </style>
</head>
<body>
    <table>
        <tr><td class="merah">Daftar Smartphone Samsung</td></tr>
        <?php
        $daftar_hp = array("s22"=>"Samsung Galaxy S22", "s22plus"=>"Samsung Galaxy S22+", "a03"=>"Samsung Galaxy A03", "xcover"=>"Samsung Galaxy Xcover 5"); 
        
        echo "<tr><td>" . $daftar_hp["s22"] . "</td></tr>";
        echo "<tr><td>" . $daftar_hp["s22plus"] . "</td></tr>";
        echo "<tr><td>" . $daftar_hp["a03"] . "</td></tr>";
        echo "<tr><td>" . $daftar_hp["xcover"] . "</td></tr>";
        ?>
    </table>
</body>
</html>