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
        '~' => 'a', '$' => 'b', '^' => 'c', '#' => 'd', '+' => 'e',
        '!' => 'f', '%' => 'g', '_' => 'h', '=' => 'i', '*' => 'j',
        'P' => 'k', 'Q' => 'l', 'R' => 'm', 'S' => 'n', 'T' => 'o' ,
        'A' => 'p', 'B' => 'q', 'C' => 'r', 'D' => 's', 'E' => 't',
        ')' => 'u', '(' => 'v', '{' => 'w', ',' => 'x', '`' => 'y', '"' => 'z',
        'F' => '1', 'G' => '2', 'H' => '3', 'I' => '4', 'K' => '5',
        'U' => '6', 'V' => '7', 'W' => '8', 'X' => '9', 'Y' => '0'
    );

    // $input = strtolower($input);

    $enkripsi = str_replace(array_keys($key), $key, $input);

    echo "kata yang akan di enkripsi adalah = " , $input;

    echo "<br><br>";
    echo "hasil deskripsi adalah = " , $enkripsi;
}
?>
