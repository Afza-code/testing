<?php
$truck = [["merk" => "Volvo",
            "type" => "FH-16",
            "mesin" => 780,
            "tahun" => 2023,
            "gambar" => "volvo_fh16.jpg"
            ],
            ["merk" => "Scania",
            "type" => "S",
            "mesin" => "V8". " (" . 770 . ")",
            "tahun" => 2023,
            "gambar" => "scania_s.jpg"
            ],
            ["merk" => "Mercedes Benz",
            "type" => "Acroos",
            "mesin" => 560,
            "tahun" => 2021,
            "gambar" => "mercedez_.jpg"
            ],
            ["merk" => "Man",
            "type" => "Tgx",
            "mesin" => 620,
            "tahun" => 2023,
            "gambar" => "man_tgx.jpg"
            ],
            ["merk" => "Renault",
            "type" => "T-High",
            "mesin" => 620,
            "tahun" => 2024,
            "gambar" => "renault_.jpg"
            ],
            ["merk" => "Scania",
            "type" => "Next-era",
            "mesin" => 770,
            "tahun" => 2025,
            "gambar" => "scania_nextera.jpg"
            ],
            ["merk" => "Daf",
            "type" => "XG",
            "mesin" => 610,
            "tahun" => 2024,
            "gambar" => "daf_.jpg"
            ],
            ["merk" => "Iveco",
            "type" => "S-Way",
            "mesin" => 530,
            "tahun" => 2024,
            "gambar" => "iveco_sway.jpg"
            ],
            ["merk" => "Faw",
            "type" => "FH-6",
            "mesin" => 550,
            "tahun" => 2024,
            "gambar" => "faw_fh6.jpg"
            ],
            ["merk" => "Ford",
            "type" => "F-Max",
            "mesin" => 580,
            "tahun" => 2023,
            "gambar" => "ford_.jpg"
            ],
    ];
?>    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afza Trans Special Transport</title>
</head>
<body>
    <h1>Welcome to Afza Trans</h1>
    <p>Special Transport in your busines</p>

    <h3>Daftar Kendaraan :</h3>
    <?php foreach($truck as $trk) : ?>
        <li>
            <img src="img/<?= $trk["gambar"] ?>">
        </li>
        <ul>
            <li>Merk : <?= $trk["merk"] ?></li>
            <li>Type : <?= $trk["type"] ?></li>
            <li>Mesin : <?= $trk["mesin"] ?> hp</li>
            <li>Tahun : <?= $trk["tahun"] ?></li>
        </ul>
    <?php endforeach ?>
</body>
</html>