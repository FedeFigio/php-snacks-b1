<head>
    <link rel="stylesheet" href="./master.css">
</head>
<?php
$calendar = [
    [
        'casa' => [
            'barcellona' => rand(1, 100)
        ],
        'ospite' => [
            'chievo' => rand(1, 100)
        ],
    ],
    [
        'casa' => [
            'catania' => rand(1, 100)
        ],
        'ospite' => [
            'chiasso' => rand(1, 100)
        ],
    ],
    [
        'casa' => [
            'napili' => rand(1, 100)
        ],
        'ospite' => [
            'milano' => rand(1, 100)
        ],
    ],
    [
        'casa' => [
            'piemonte' => rand(1, 100)
        ],
        'ospite' => [
            'torino' => rand(1, 100)
        ],
    ],
];

?>
<table style="width:100%">
    <tr>
        <th>Casa</th>
        <th>Ospite</th>
        <th>Punti Casa</th>
        <th>Punti Ospite</th>
    </tr>

    <?php
    for ($i = 0; $i < count($calendar); $i++) :

        $casa = array_keys($calendar[$i]['casa'])[0];
        $ospite = array_keys($calendar[$i]['ospite'])[0];
        $puntiCasa = $calendar[$i]['casa'][$casa];
        $puntiOspite = $calendar[$i]['ospite'][$ospite];
    ?>
        <tr>
            <td><?= $casa ?> </td>
            <td><?= $ospite ?> </td>
            <td><?= $puntiCasa ?> </td>
            <td><?= $puntiOspite ?> </td>
        </tr>
    <?php endfor ?>
</table>