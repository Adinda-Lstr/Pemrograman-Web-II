<?php
$bintang = 0;
if (isset($_POST['bintang'])) { $bintang = $_POST['bintang']; }
if (isset($_POST['tambah'])) { $bintang++; }
if (isset($_POST['kurang'])) { $bintang--; }
?>

<html>
<body>
    <?php if ($bintang == 0): ?>
        <form method="POST">
            Jumlah bintang <input type="text" name="bintang"><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    <?php else: ?>
        <form method="POST">
            Jumlah bintang <?php echo $bintang; ?><br><br>
            <?php 
            for ($i = 0; $i < $bintang; $i++) {
                echo "<img src='https://www.freepnglogos.com/uploads/star-png/star-vector-png-transparent-image-pngpix-21.png' width='80px'>";
            }
            ?>
            <br>
            <input type="hidden" name="bintang" value="<?php echo $bintang; ?>">
            <input type="submit" name="tambah" value="Tambah">
            <input type="submit" name="kurang" value="Kurang">
        </form>
    <?php endif; ?>
</body>
</html>