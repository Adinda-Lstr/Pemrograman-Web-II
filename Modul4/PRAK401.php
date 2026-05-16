<html>
<body>
    <form method="POST">
        Panjang: <input type="text" name="panjang"><br>
        Lebar: <input type="text" name="lebar"><br>
        Nilai: <input type="text" name="nilai"><br>
        <input type="submit" name="submit" value="Cetak">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];
        $nilai = $_POST['nilai'];
        
        $data = explode(" ", $nilai);
        
        if (count($data) == ($panjang * $lebar)) {
            $count = 0;
            echo "<table border='1' cellspacing='0' cellpadding='5'>";
            for ($i = 0; $i < $panjang; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $lebar; $j++) {
                    echo "<td>" . $data[$count] . "</td>";
                    $count++;
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "Panjang nilai tidak sesuai dengan ukuran matriks";
        }
    }
    ?>
</body>
</html>