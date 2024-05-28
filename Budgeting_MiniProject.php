<?php

//Bu projede, farklı dosyalardan alınan gelir,gider,tarih ve açıklama bilgileri ile bütçe hesaplaması yapılacaktır.

$file_path_counter = 1;
$BudgetDatas = array();
$income = 0;
$expense = 0;


// Verilerin toplanacağı text dosyalarını okur ve arrray'e atar
while (file_exists("Budget_" . $file_path_counter . ".txt")) {
    $fileName = "Budget_" . $file_path_counter . ".txt";
    $file = fopen($fileName, "r");

    while (($line = fgetcsv($file)) !== false) {
        array_push($BudgetDatas, $line);
    }
    $file_path_counter++;
}

// tarihe göre sıralar
usort($BudgetDatas, fn($a, $b) => strtotime($a[0]) <=> strtotime($b[0]));



echo "<pre>";
print_r($BudgetDatas);
echo "<pre>";

$lineNumber = count($BudgetDatas);

//HTML

echo "<h1>Budget</h1>";

echo "<table>";
echo "<tr>";
echo "<th>Date</th>";
echo "<th>Description</th>";
echo "<th>Amount</th>";
echo "</tr>";

for ($i = 0; $i < $lineNumber; $i++) {

    if ($BudgetDatas[$i][2] > 0) {
        $income += $BudgetDatas[$i][2];
    } else {
        $expense += $BudgetDatas[$i][2];
    }
    echo "<tr>";
    echo "<td>" . $BudgetDatas[$i][0] . "</td>";
    echo "<td>" . $BudgetDatas[$i][1] . "</td>";
    echo "<td>" . $BudgetDatas[$i][2] . "</td>";
    echo "</tr>";
}
echo "<tr>";
echo "<td> Income: " . $income . "$</td>";
echo "<td> Expense: " . $expense. "$</td>";
echo "<td> Balance: " . $income+ $expense . "$</td>";
echo "</tr>";

echo "</table>";