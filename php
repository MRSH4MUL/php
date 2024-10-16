<?php
//# Coded By XYLON
//# Telegram :@Abdullha_404
https://t.me/Abdullha_404
//Main Api
$api_url = "https://your-suyaib.xyz/TrueCaller.php";

//Num And Key Parameter
$number = isset($_GET['number']) ? $_GET['number'] : '';
$key = isset($_GET['key']) ? $_GET['key'] : '';

//Parameter Error
if (empty($number) || empty($key)) {
    echo "Please provide both 'number' and 'key' parameters.";
    exit;
}

// Api Call
$url_with_params = $api_url . "?number=" . urlencode($number) . "&key=" . urlencode($key);

// Data Collect
$response = file_get_contents($url_with_params);
$data = json_decode($response, true);

// Respomse
if ($data && is_array($data)) {
    foreach ($data as $item) {
        $name = isset($item['name']) ? $item['name'] : 'N/A';
        echo "Name: " . htmlspecialchars($name) . "<br>";
    }
} else {
    echo "No data found or invalid response from API.<br>";
}
?>
