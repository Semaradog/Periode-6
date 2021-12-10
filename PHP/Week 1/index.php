<!DOCTYPE html>
<html lang="en">
<?php

if(isset($_POST['hashValue'])){
    echo hash('md5',$_POST['hashValue']);
}

if (isset($_POST['encryptValue'])) {
    echo 'String: ' . $_POST['encryptValue'] . "<br>";
    $simple_string = $_POST['encryptValue'];
    $ciphering = "AES-128-CTR";
    $iv_length = openssl_cipher_iv_length($ciphering);
    $options = 0;
    $encryption_iv = '1234567891011121';
    $encryption_key = "String";
    $encryption = openssl_encrypt(
        $simple_string,
        $ciphering,
        $encryption_key,
        $options,
        $encryption_iv
    );
    echo "Encrypted String: " . $encryption . "\n" . "<br>";
    $decryption_iv = '1234567891011121';
    $decryption_key = "String";
    $decryption = openssl_decrypt(
        $encryption,
        $ciphering,
        $decryption_key,
        $options,
        $decryption_iv
    );
    echo "Decrypted String: " . $decryption;
    echo "<script type='text/javascript'>alert('Encrypted String: $encryption');</script>";
}

if (isset($_POST['decryptValue'])) {
    echo 'String: ' . $_POST['decryptValue'] . "<br>";
    $encryption = $_POST['decryptValue'];
    $ciphering = "AES-128-CTR";
    $options = 0;
    $decryption_iv = '1234567891011121';
    $decryption_key = "String";
    $decryption = openssl_decrypt(
        $encryption,
        $ciphering,
        $decryption_key,
        $options,
        $decryption_iv
    );
    echo "Decrypted String: " . $decryption;
    echo "<script type='text/javascript'>alert('Decrypted String: $decryption');</script>";
}

if (isset($_POST['encode'])) {
    $encode = base64_encode($_POST['encode']);
    echo $encode;
    echo "<script type='text/javascript'>alert('Encoded String: $encode');</script>";
}

if (isset($_POST['escape'])) {
    $escape = htmlspecialchars($_POST['escape']);
    echo $escape;
    echo "<script type='text/javascript'>alert('Encoded String: $escape');</script>";
}

//schrijf hier je PHP code....
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    if (!empty($_POST["hashValue"])) {
//        //doe hier iets....
//        echo("<script>alert()</script>");
//      }
//    }
// //etc.....
?>
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>SECURITY - OPDRACHT 1 - template</title>
</head>
<body>
   <!-- deze code is een begin, maar nog niet volledig, vul deze dus aan waar nodig!! -->
   <form id="hashing" action="index.php" method="post">
       <input type="text" name="hashValue">
       <input type="submit" value="hash">
   </form>
   <hr>
   <form id="encryption" action="index.php" method="post">
       <input type="text" name="encryptValue">
       <input type="submit" value="encrypt">
   </form>
   <hr>
   <form id="decryption" action="index.php" method="post">
       <input type="text" name="decryptValue">
       <input type="submit" value="decrypt">
   </form>
   <hr>
   <form id="encoding" action="index.php" method="post">
        <input type="text" name="encode">
        <input type="submit" value="encode">
    </form>
   <hr>
   <form id="escaping" action="index.php" method="post">
        <input type="text" name="escape">
        <input type="submit" value="escape">
    </form>
   <hr>
   <form id="obfuscation">
        <textfield />
        <input type="submit" value="obfuscate">
    </form>
</body>
</html>