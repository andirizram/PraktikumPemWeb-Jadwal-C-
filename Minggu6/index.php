<?php
function intToRomawi($angka)  
{ 
    $n = intval($angka);
    $hasil = ''; 
 
    $list_angka = array(
        'M'     => 1000, 
        'CM'    => 900, 
        'D'     => 500, 
        'CD'    => 400, 
        'C'     => 100, 
        'XC'    => 90, 
        'L'     => 50, 
        'XL'    => 40, 
        'X'     => 10, 
        'IX'    => 9, 
        'V'     => 5, 
        'IV'    => 4, 
        'I'     => 1
    ); 
 
    foreach ($list_angka as $romawi => $nilai)  
    {
        $cocok = intval($n / $nilai); 
 
        $hasil .= str_repeat($romawi, $cocok); 
 
        $n = $n % $nilai; 
    } 

    return $hasil; 
} 

// LVIII
echo intToRomawi(58);

echo "<br>";
echo "<br>";

// MCMXCIV
echo intToRomawi(1994);
?>
