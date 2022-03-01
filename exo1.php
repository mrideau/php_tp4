<?php

$association1 = [
    'Gourdel' => ['Adrien', 'Paris', '25 ans'],
    'Dary' => ['Clement', 'Toulouse', '18 ans']
];

$association2 = [
    'Barel' => [
        'prenom' => 'John',
        'ville' => 'New York',
        'age' => '28 ans'
    ],
    'Paret' => [
        'prenom' => 'Paul',
        'ville' => 'Saint Malo',
        'age' => '18 ans'
    ]
];

foreach ($association1 as $key => $infos)
{
    echo $key;
    foreach ($infos as $value) {
        echo ', ' . $value;
    }
    echo '<br/>';
}

echo '<br/>';

foreach ($association2 as $key => $infos)
{
    echo $key;
    foreach ($infos as $value) {
        echo ', ' . $value;
    }
    echo '<br/>';
}

echo '<br/>';
echo '<br/>';

while(count($association1) > 0)
{
    $infos = array_shift($association1);
    print vsprintf('%s, %s, %s', $infos);
    echo '<br/>';
}

echo '<br/>';

while(count($association2) > 0)
{
    $infos = array_shift($association2);
    print vsprintf('%s, %s, %s', $infos);
    echo '<br/>';
}