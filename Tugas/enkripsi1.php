<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text Encryption</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="container">
        <h1>Text Encryption</h1>
        <form method="post">
            <input type="text" name="input" placeholder="Enter text to encrypt" required>
            <input type="submit" value="Encrypt">
        </form>
        <div class="result">
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                enkripsi();
            }
            ?>
        </div>
    </div>
</body>
</html>
<?php
function enkripsi(){
    $input = $_POST["input"];
    
    $key = array(
        'a' => '~', 'b' => '$', 'c' => '^', 'd' => '#', 'e' => '+',
        'f' => '!', 'g' => '%', 'h' => '_', 'i' => '=', 'j' => '*',
        'k' => 'P', 'l' => 'Q', 'm' => 'R', 'n' => 'S', 'o' => 'T' ,
        'p' => 'A', 'q' => 'B', 'r' => 'C', 's' => 'D', 't' => 'E',
        'u' => ')', 'v' => '(', 'w' => '{', 'x' => ',', 'y' => '`', 'z' => '"',
        '1' => 'F', '2' => 'G', '3' => 'H', '4' => 'I', '5' => 'J',
        '6' => 'U', '7' => 'V', '8' => 'W', '9' => 'X', '0' => 'Y'
    );

    // $input = strtolower($input);

    $enkripsi = str_replace(array_keys($key), $key, $input);

    echo "Text to encrypt: ", $input, "<br><br>";
    echo "Encrypted result: ", $enkripsi;
}
?>
