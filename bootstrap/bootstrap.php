<?php
require INC_ROOT . '/vendor/autoload.php';

use Practice\Factories\ComputerFactoryA;
use Practice\Factories\ComputerFactoryB;
use Practice\Factories\ComputerFactoryC;

$outputType = htmlspecialchars($_GET["type"]);
$pcType = htmlspecialchars($_GET["pc"]);

if (ucfirst($pcType) === "A") {
    $factory = new ComputerFactoryA();
} elseif(ucfirst($pcType) === "B") {
    $factory = new ComputerFactoryB();
} else {
    $factory = new ComputerFactoryC();
}
$coms = $factory->createComputers();

if ('table' === $outputType) {
    $thead = '';
    $tbody = '<tbody>';

    foreach ($coms as $com) {
        if ('' === $thead) {
            $a = get_object_vars($com);
            $thead.= '<thead>';
            $thead.= '<tr>';
            $thead.= '<th>';
            $thead = implode('</th><th>', array_keys($a));
            $thead.= '</th>';
            $thead.= '</tr>';
            $thead.= '</thead>';
        }
        $a = get_object_vars($com);
        $tbody.= '<tr>';
        $tbody.= '<td>';
        $tbody.= implode('</td><td>', array_values($a));
        $tbody.= '</td>';
        $tbody.= '</tr>';
    }
    $tbody.= '</tbody>';
    $tableHtml = '';
    $tableHtml.= '<table>';
    $tableHtml.= $thead;
    $tableHtml.= $tbody;
    $tableHtml.= '</table>';
    $res = $tableHtml;
}

if ('json' === $outputType) {
    $res = json_encode($coms);
}

if ('csv' === $outputType) {
    $header = null;
    foreach ($coms as $com) {
        if (null === $header) {
            $header = get_object_vars($com);
            $header = implode(',', array_keys($header));
            $rows[] = $header;
        }
        $row = get_object_vars($com);
        $rows[] = implode(',', array_values($row));
    }
    $res = implode('<br>', $rows);
}

print_r($res);

