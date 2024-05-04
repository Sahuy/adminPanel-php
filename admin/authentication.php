<?php
session_start();  // Sabse pehle, yeh line session ko start karti hai. PHP mein sessions ka use users ko track karne ke liye hota hai. Isse aapko user ki kuch information (like authentication, preferences, etc.) ko ek session variable mein store karne ka mauka milta hai.

if (!isset($_SESSION['auth'])) {  // Yeh condition check karti hai ki kya "auth" naam ka session variable set hai ya nahi. Matlab, yeh dekh raha hai ki user authenticated hai ya nahi.

    $_SESSION['auth_status'] = "Login to Access Dashboard";  // Agar "auth" variable set nahi hai, toh yeh ek aur session variable "auth_status" set karta hai. Iska matlab hai ki aapko login karna hoga dashboard ko access karne ke liye.

    header("Location: login.php");  // Yeh line user ko "login.php" page pe redirect karti hai agar "auth" variable set nahi tha. Iska matlab user ko login karna hoga.

    exit(0);  // Yeh line execution ko yahin rok deti hai taaki aage ka code na chale. Iska matlab hai ki user ko sirf login page pe bheja jayega.

}
?>
