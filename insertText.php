<?php
$text = $_POST['tulisan'];
$target_url = 'https://localhost:5001/api/texts';
$post_array = array('text' => $text);
$post = json_encode($post_array);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $target_url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_VERBOSE, true);

$headers = array(
    "Content-Type: application/json-patch+json",
);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);

// echo curl_getinfo($ch) . '<br/>';
//echo curl_errno($ch) . '<br/>';
//echo curl_error($ch) . '<br/>';
// echo $post . '<br/>';

//$output = json_decode($result, true);
//$statusCode = $output['status'];

// if (curl_errno($ch) != 0) {
//     echo 'Data error 😨';
// } elseif ($statusCode = 415) {
//     echo 'API error 😫';
// } else {
//     echo $statusCode;
// }

curl_close($ch);

header('Location: index.php');
