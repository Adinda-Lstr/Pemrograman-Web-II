<html>
<body>
    <form method="POST">
        <input type="text" name="input">
        <input type="submit" name="submit" value="submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $input = $_POST['input'];
        $panjang = strlen($input);
        $arr = str_split($input);
        
        echo "<b>Input:</b><br>$input<br><br>";
        echo "<b>Output:</b><br>";
        
        $i = 0;
        do {
            $char = $arr[$i];
            echo strtoupper($char);
            
            $j = 1;
            while ($j < $panjang) {
                echo strtolower($char);
                $j++;
            }
            $i++;
        } while ($i < $panjang);
    }
    ?>
</body>
</html>