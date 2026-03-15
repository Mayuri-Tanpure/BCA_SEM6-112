<?php

// Generate a random OTP
$otp = rand(1000, 9999);

echo "Generated OTP: " . $otp . "<br>";

// Suppose user enters this OTP
$user_otp = $otp;   // change this value to test verification

if($user_otp == $otp){
    echo "OTP Verified Successfully";
}
else{
    echo "Invalid OTP";
}

?>
