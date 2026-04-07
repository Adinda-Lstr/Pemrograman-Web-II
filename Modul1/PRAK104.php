<html>
<head>
    <style>
        table, td { border: 1px solid black; }
    </style>
</head>
<body>
    <table>
        <tr><td><b>Daftar Smartphone Samsung</b></td></tr>
        <?php
        $smartphone = array("Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover 5"); 
        
        echo "<tr><td>" . $smartphone[0] . "</td></tr>";
        echo "<tr><td>" . $smartphone[1] . "</td></tr>";
        echo "<tr><td>" . $smartphone[2] . "</td></tr>";
        echo "<tr><td>" . $smartphone[3] . "</td></tr>";
        ?>
    </table>
</body>
</html>