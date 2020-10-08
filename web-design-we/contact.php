<?php
$url = "https://hooks.zapier.com/hooks/catch/803715/oiq6fwh/";

$name = $_POST['name'] ? $_POST['name'] : "";
$email = $_POST['email'] ? $_POST['email'] : "";
$phone = $_POST['phone'] ? $_POST['phone'] : "";
$message = $_POST['message'] ? $_POST['message'] : "";
$web_type = $_POST['web_type'] ? $_POST['web_type'] : "";
$utm_source = $_POST['utm_source'] ? $_POST['utm_source'] : "Orgánico";
$utm_medium = $_POST['utm_medium'] ? $_POST['utm_medium'] : "";
$utm_campaign = $_POST['utm_campaign'] ? $_POST['utm_campaign'] : "";
$utm_term = $_POST['utm_term'] ? $_POST['utm_term'] : "";
$utm_content = $_POST['utm_content'] ? $_POST['utm_content'] : "";
$pais = $_POST['pais'] ? $_POST['pais'] : "";


$data = array(
    'name' => $name,
    'email' => $email,
    'phone' => $phone,
    'message' => $message,
    'web_type' => $web_type,
    'utm_source' => $utm_source,
    'utm_medium' => $utm_medium,
    'utm_campaign' => $utm_campaign,
    'utm_term' => $utm_term,
    'utm_content' => $utm_content,
    'pais' => $pais,
);

$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { }