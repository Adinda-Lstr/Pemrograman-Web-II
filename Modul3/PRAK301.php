<html>
<body>
    <form method="POST">
        Jumlah Peserta: <input type="text" name="jumlah"><br>
        <input type="submit" name="submit" value="Cetak">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $jumlah = $_POST['jumlah'];
        $i = 1;
        while ($i <= $jumlah) {
            if ($i % 2 == 1) {
                echo "<h2 style='color: red;'>Peserta ke-$i</h2>";
            } else {
                echo "<h2 style='color: green;'>Peserta ke-$i</h2>";
            }
            $i++;
        }
    }
    ?>
</body>
</html>