<?php

function task1(array $arrayOfStrings, bool $return)
{
    foreach ($arrayOfStrings as $string) {
        if (!$return) {
            echo "<p>$string</p>\n";
        } else {
            $result = "";
            $result .= "<p>$string</p>\n";
            return $result;
        }
    }
}

function task2(string $action, ...$args)
{
    switch ($action) {
        case '+':
            return array_sum($args);
        case '-':
            return array_shift($args) - array_sum($args);
        case '/':
            $result = array_shift($args);
            foreach ($args as $arg) {
                $result = $result / $arg;
            }
            return $result;
        case '*':
            $result = 1;
            foreach ($args as $arg) {
                $result *= $arg;
            }
            return $result;
        default:
            return 0;
    }
}

function task3(int $int1, int $int2)
{
    $result = '<table>';
    for ($i = 1; $i <= $int1; $i++) {
        $result .= '<tr>';
        for ($j = 1; $j <= $int2; $j++) {
            $result .= '<td>' . $i * $j . '</td>';
        }
        $result .= '</tr>';
    }
    $result .= '</table>';
    return $result;
}

function task4()
{
    echo date('d.m.Y H:i') . "\n";
    echo strtotime('24.02.2016 00:00:00');
}

function task5()
{
    echo $carl = "Карл у Клары украл Кораллы" . "\n";
    echo $bottles = "Две бутылки лимонада" . "\n\n";

    echo str_replace("К", "", $carl);
    echo str_replace("Две", "Три", $bottles);
}

function task6()
{
    file_put_contents('test.txt', "Hello Again!");
}

function task7($filename)
{
    if ($file = fopen($filename, "r")) {
        $strings = "";

        while (!feof($file)) {
            $strings .= fgets($file, 1024);
        }

        echo $strings;
    } else {
        echo "Не удалось открыть файл\n";
    }
}

function task8()
{
}

function task9()
{
}

function task10()
{
}
