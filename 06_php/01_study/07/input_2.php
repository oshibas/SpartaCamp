<?php

$price = 10000;

// header("Location: thankyou_2.php?price={$price}"); でも良い
header('Location: thankyou_2.php?price=' . $price);
exit; 
