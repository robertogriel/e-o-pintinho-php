<?php

$bichos = ['Pintinho', 'Galinha', 'Galo', 'Peru', 'Capote', 'Gato', 'Cachorro', 'Cabra', 'Bode', 'Vaca', 'Boi', 'Moça'];

$sons = ['Piu', 'Co', 'Cocoricó', 'Glu Glu', 'To Fraco', 'Miau', 'Au Au', 'Mééé', 'Bééé', 'Muuuu', 'Móóó', 'Oh!'];

$animal = 0;
$eOPintinho = 0;
$counter = 0;

for($i = 0; $i <= count($bichos) - 1;$i++) {
    switch ($bichos[$i]) {
        case 'Galinha':
        case 'Cabra':
        case 'Vaca':
        case 'Moça':
            echo "Lá em casa tinha uma " . $bichos[$i] . ",<br>";
            echo "Lá em casa tinha uma " . $bichos[$i] . ".<br>";
        break;
        default:
            echo "Lá em casa tinha um " . $bichos[$i] . ",<br>";
            echo "Lá em casa tinha um " . $bichos[$i] . ".<br>";
        break;
    }

    if ($bichos[$i] === 'Pintinho' && $i === 0) {
        echo "E o pintinho piu<br>";
    }

    for($animal = $counter; $animal > 0; $animal--) {
        if ($animal !== 0) {
            switch ($bichos[$animal]) {
                case 'Galinha':
                case 'Cabra':
                case 'Vaca':
                case 'Moça':
                    echo "E a " . $bichos[$animal] . " " . $sons[$animal] . "<br>";
                break;
                default:
                    echo "E o " . $bichos[$animal] . " " . $sons[$animal] . "<br>";
                break;
            }
        }
    }
    
    switch($bichos[$i]) {
        case "Pintinho":
        case "Galinha":
            for ($eOPintinho = 0; $eOPintinho <= 4; $eOPintinho++) {
                echo "E o pintinho piu<br>";
            }
        break;
        case "Galo":
        case "Capote":
        case "Cachorro":
        case "Bode":
        case "Boi":
        case "Moça":
            for ($eOPintinho = 0; $eOPintinho <= 3; $eOPintinho++) {
                echo "E o pintinho piu<br>";
            }
        break;
        case "Peru":
        case "Gato":
        case "Cabra":
        case "Vaca":
            for ($eOPintinho = 0; $eOPintinho <= 2; $eOPintinho++) {
                echo "E o pintinho piu<br>";
            }
        break;
    }

    $counter++;
    echo "<br>";
}