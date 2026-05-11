<html>
<body>
    <form method="POST">
        Tinggi: <input type="text" name="tinggi"><br>
        Alamat Gambar: <input type="text" name="gambar"><br>
        <input type="submit" name="submit" value="Cetak">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $tinggi = $_POST['tinggi'];
        $gambar = $_POST['gambar']; 

        $i = 1;
        while ($i <= $tinggi) { 
            
            $j = 1;
            while ($j < $i) {
                echo "<img src='$gambar' style='width:25px; height:25px; opacity:0;'>";
                $j++;
            }

            $k = $tinggi;
            while ($k >= $i) {
                echo "<img src='$gambar' style='width:25px; height:25px;'>";
                $k--;
            }

            echo "<br>"; 
            $i++;
        }
    }
    ?>
</body>
</html>