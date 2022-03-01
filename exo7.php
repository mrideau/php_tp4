<?php
$emails = ['mail@gmail.com', 'name@hotmail.com', 'email@gmail.com', 'mail@ouivalo.fr'];
$servers = [];

foreach ($emails as $email) {
    $server = explode('.', explode('@', $email)[1])[0];

    if (array_key_exists($server, $servers))
        $servers[$server] ++;
    else
        $servers[$server] = 1;
}

echo '<pre>';
print_r($emails);
echo '</pre>';

echo '<br/>';

$email_count = count($emails);
foreach ($servers as $server => $count) {
    $percent = round($count * 100 / $email_count);
    echo "$server $percent%<br/>";
}