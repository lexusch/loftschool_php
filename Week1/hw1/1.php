<?php
// Задание 1
echo "Задание 1:\n";

$name = "Алексей";
$age = "23";

echo "Меня зовут: $name\n";
echo "Мне $age года\n";

echo '"!|/\'"\\';
echo "\n\n";


// Задание 2
echo "Задание 2:\n";

const PICS = 80;
const FELT_PICS = 23;
const PENC_PICS = 40;

echo "На школьной выставке " . PICS . " рисунков.\n" . FELT_PICS . " из них выполнены фломастерами, " . PENC_PICS . " карандашами, а остальные - красками.\n";

$colorPics = PICS - (FELT_PICS + PENC_PICS);
echo "Красками выполнено $colorPics рисунков\n";
echo "\n";


// Задание 3
echo "Задание 3:\n";

$age = 34;
if ($age >= 18 && $age <= 65) {
    echo "Вам ещё работать и работать\n";
} elseif ($age > 65) {
    echo "Вам пора на пенсию\n";
} elseif ($age < 18 && $age > 0) {
    echo "Вам ещё рано работать\n";
} else {
    echo "Неизвестный возраст\n";
}
echo "\n";


// Задание 4
echo "Задание 4:\n";

$day = 5;

switch ($day) {
    case $day <= 5 && $day > 0:
        echo "Это рабочий день\n";
        break;
    case $day > 5 && $day <= 7:
        echo "Это выходной день\n";
        break;
    default:
        echo "Неизвестный день\n";
}
echo "\n";


// Задание 5
echo "Задание 5:\n";

$bmw = [
    'model' => 'X5',
    'speed' => 120,
    'doors' => 5,
    'year' => '2015'
];
$toyota = [
    'model' => 'X6',
    'speed' => 135,
    'doors' => 4,
    'year' => '2018'
];
$opel = [
    'model' => 'X7',
    'speed' => 140,
    'doors' => 2,
    'year' => '2016'
];

$allCars = [
    'bmw' => $bmw,
    'toyota' => $toyota,
    'opel' => $opel
];

foreach ($allCars as $key => $car) {
    echo "CAR $key\n";
    echo $car['model'] . " " . $car['speed'] . " " . $car['doors'] . " " . $car['year'] . "\n";
    echo "\n";
}


// Задание 6
echo '<table>';
for ($i = 1; $i <= 10; $i++) {
    echo '<tr>';
    for($j = 1; $j < 10; $j++) {
        echo '<td>';
        $result = $i * $j;
        if ($i % 2 == 0 && $j % 2 == 0) {
            echo "($result)";
        } elseif ($i % 2 != 0 && $j % 2 != 0) {
            echo "[$result]";
        } else {
            echo "$result";
        }
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';