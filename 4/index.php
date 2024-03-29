<pre>
<?php

include "generator.php";

function outputText()
{
    if (isset($_POST["text"])) {
        $text = $_POST["text"];
        $textArray = explode("\n", $text);
        $print_text = jsonText($textArray);
        print json_encode($print_text, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    } else {
        include "task4.html";
    }
}

outputText();
function jsonText($textArray)
{
    $arr = [];
    $sum = 0;
    $arrGenerator = [];

    foreach ($textArray as $value) {
        array_push($arr, explode(' ', $value));
    }

    foreach ($arr as $value) {
        $sum += (int)$value[count($value) - 1];
    }

    $a = 0;
    foreach ($arr as $value) {
        $text = '';
        for ($i = 0; $i < count($value) - 1; $i++) {
            $text .= $value[$i] . ' ';
        }
        $arr[$a] = ["text" => $text, "weight" => (int)$value[count($value) - 1], "probability" => (1 / $sum) * (int)$value[count($value) - 1]];
        $arrGenerator[$a] = ["text" => $text, "count" => (int)0, "calculated_probability" => 0];
        $a++;
    }

    $arr2 = ["sum" => $sum, "data" => $arr];
    $gen = generator($arrGenerator, $arr2);
    print sprintf("%s\n\n</br>", json_encode($gen, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
    return $arr2;
}

?>
</pre>