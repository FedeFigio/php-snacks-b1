<?php
$class = [
    0 => [
        0 => [
            "name" => "pippo",
            "surname" => "francoli",
            "votes" => [10, 4, 8, 5.5]
        ],
        1 => [
            "name" => "Michele",
            "surname" => "Rossi",
            "votes" => [9, 4, 5, 7]
        ],
        2 => [
            "name" => "Andrea",
            "surname" => "verdi",
            "votes" => [10, 6, 9, 2]
        ],
        3 => [
            "name" => "Francesco",
            "surname" => "sica",
            "votes" => [7, 7, 7, 6]
        ]
    ],
    1 => [
        0 => [
            "name" => "Franco",
            "surname" => "neri",
            "votes" => [8.5, 6, 4, 4.5]
        ],
        1 => [
            "name" => "Fabio",
            "surname" => "tabbi",
            "votes" => [4, 4.5, 7, 7]
        ],
        2 => [
            "name" => "Lorenzo",
            "surname" => "de sossi",
            "votes" => [8, 4, 9, 1]
        ],
        3 => [
            "name" => "Fabiano",
            "surname" => "verdi",
            "votes" => [5, 5, 3, 6]
        ]
    ]
];

for ($i = 0; $i < count($class); $i++) :
    for ($j = 0; $j < count($class[$i]); $j++) :
        $average = 0;

        for ($k = 0; $k < count($class[$i][$j]["votes"]); $k++) {
            $average += $class[$i][$j]["votes"][$k];
        }
        $average /= count($class[$i][$j]["votes"]);
        $average = round($average, 1);
?>
        <div style="padding: 20px;">
            <p>nome: <?php echo "<span>" . $class[$i][$j]["name"] . "</span>"; ?></p>
            <p>cognome: <?php echo "<span>" . $class[$i][$j]["surname"] . "</span>"; ?></p>
            <p>media voti: <?php echo "<span>" . $average . "</span>"; ?></p>
        </div>

    <?php endfor; ?>
<?php endfor; ?>