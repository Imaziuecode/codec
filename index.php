<?php


$url = 'https://furqanscors.onrender.com/https://api2.sololearn.com/v2/trends/projects/detailed?query=hello&filter=4&index=0&count=40&profileId=18673391';

$headers = array(
    "Accept: application/json, text/plain, */*",
    "SL-Time-Zone: +5.5",
    "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzaWQiOiJ7XCJJbnN0YW5jZUlkXCI6Mjg3ODMzMjQsXCJVc2VySWRcIjozMDAxOTA5MCxcIk5pY2tuYW1lXCI6XCJpbWF6aXVlMVwiLFwiRGV2aWNlSWRcIjo3NDIyNzA2MixcIkNsaWVudElkXCI6MTE0MyxcIkxvY2FsZUlkXCI6MSxcIkFwcFZlcnNpb25cIjpcIjAuMC4wLjBcIixcIklzUHJvXCI6ZmFsc2UsXCJHZW5lcmF0aW9uXCI6XCJhM2I4MWI1MC0xNmUxLTRkYjQtYmZlMy1lZTY0YjI4MDg3NzZcIn0iLCJqdGkiOiJiM2YxN2RmNC1lNmJiLTQxZTgtYTE2OS01ZDliYmEwOWFiZjUiLCJodHRwOi8vc2NoZW1hcy5taWNyb3NvZnQuY29tL3dzLzIwMDgvMDYvaWRlbnRpdHkvY2xhaW1zL3JvbGUiOiJVc2VyIiwibmJmIjoxNjkzMDE5MzEzLCJleHAiOjE2OTMwMjI5MTMsImlzcyI6IlNvbG9MZWFybi5TZWN1cml0eS5CZWFyZXIiLCJhdWQiOiJTb2xvTGVhcm4uU2VjdXJpdHkuQmVhcmVyIn0.UogU7GTC01rlKjkN-iL8D0bsl4NRsP6dho-Ii4PCeD8",
    "Content-Type: application/json; charset=utf-8",
    
    "origin:https://unurged-tone.000webhostapp.com"
);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($ch);
curl_close($ch);

echo $response;
?>
