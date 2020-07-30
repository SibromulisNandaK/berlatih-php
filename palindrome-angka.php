<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

function palindrome_angka($angka) {
  // tulis kode di sini
}

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

function palindrome($n){  
    $number = $n;  
    $sum = 0;  
    while(floor($number)) {  
        $rem = $number % 10;  
        $sum = $sum * 10 + $rem;  
        $number = $number/10;  
    }  
    return $sum;  
}  
$input = 1235321;  
$num = palindrome($input);  
if($input==$num){  
    echo "$input is a Palindrome number";  
} else {  
    echo "$input is not a Palindrome";  
}  
?>
</body>

</html>