<html>
<body>
    <form method="POST">
        Batas Bawah: <input type="text" name="bawah"><br>
        Batas Atas: <input type="text" name="atas"><br>
        <input type="submit" name="submit" value="Cetak">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $bawah = $_POST['bawah'];
        $atas = $_POST['atas'];
        
        echo "<br>";
        $i = $bawah;
        do {
            if (($i + 7) % 5 == 0) {
                echo "<img src='https://www.freepnglogos.com/uploads/star-png/star-vector-png-transparent-image-pngpix-21.png' width='20px'> ";
            } else {
                echo "$i ";
            }
            $i++;
        } while ($i <= $atas);
    }
    ?>
</body>
</html>