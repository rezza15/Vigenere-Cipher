<?php

// Fungsi untuk mengenkripsi pesan dengan Vigenere Cipher
function vigenereEncrypt($plainText, $key) {
    $keyLength = strlen($key);
    $encryptedText = '';

    for ($i = 0; $i < strlen($plainText); $i++) {
        $char = $plainText[$i];
        $keyChar = $key[$i % $keyLength];

        $encryptedChar = chr(((ord($char) + ord($keyChar)) % 26) + ord('A'));
        $encryptedText .= $encryptedChar;
    }

    return $encryptedText;
}

// Fungsi untuk mendekripsi pesan yang dienkripsi dengan Vigenere Cipher
function vigenereDecrypt($encryptedText, $key) {
    $keyLength = strlen($key);
    $decryptedText = '';

    for ($i = 0; $i < strlen($encryptedText); $i++) {
        $char = $encryptedText[$i];
        $keyChar = $key[$i % $keyLength];

        $decryptedChar = chr(((ord($char) - ord($keyChar) + 26) % 26) + ord('A'));
        $decryptedText .= $decryptedChar;
    }

    return $decryptedText;
}

$key = "KEY";  // Ganti dengan kunci Vigenere Anda sendiri
$plainText = "HELLOWORLD";
$encryptedText = vigenereEncrypt(strtoupper($plainText), $key);
$decryptedText = vigenereDecrypt($encryptedText, $key);

echo "Plaintext: " . $plainText . "<br>";
echo "Encrypted: " . $encryptedText . "<br>";
echo "Decrypted: " . $decryptedText . "<br>";

?>
