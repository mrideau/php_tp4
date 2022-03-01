<?php
$sites = ['google.com', 'youtube.com', 'apple.com', 'steam.com', 'ouivalo.fr'];

shuffle($sites);

print array_shift($sites);