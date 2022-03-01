<?php
$entiers = range(1, 63);
$numbers = [];

foreach ($entiers as $value)
{
    array_push($numbers, $value * 0.1);
}

$sins = [];

foreach ($numbers as $value)
{
    $sins[(string)$value] = sin($value);
}

?>
<table>
    <tr>
        <th>x</th>
        <th>sin(x)</th>
    </tr>
    <?php foreach ($sins as $key => $value) : ?>
        <tr>
            <td><?php echo $key; ?></td>
            <td><?php echo $value; ?></td>
        </tr>
    <?php endforeach; ?>
</table>