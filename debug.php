<?php
$googleScriptUrl = 'https://script.google.com/macros/s/AKfycbyXBO670Z47uImAY14-9fcSHDbBcFSTmeh5bphKzEm6nfkLY8jZAVgfks45H0oRsa0Elw/exec';

$payload = json_encode([
    'testId' => 'debug_test',
    'participantName' => 'debug_user',
    'trialId' => 'debug_trial',
    'stimulus' => 'debug_stimulus',
    'score' => 99
]);

$ch = curl_init($googleScriptUrl);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_POST, true);
$result = curl_exec($ch);
$error = curl_error($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

echo "HTTP Code: $httpcode<br>";
echo "Result: $result<br>";
echo "Error: $error<br>";
?>
