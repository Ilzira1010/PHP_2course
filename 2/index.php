<?php
function symbol( String $data, int &$count) {
    for ($i=0; $i<strlen($data); $i++) {
        switch ($data[$i]) {
            case 'h':
                $count++;
                yield "4";
                break;
            case 'l':
                $count++;
                yield "1";
                break;
            case 'e':
                $count++;
                yield "3";
                break;
            case 'o':
                $count++;
                yield "0";
                break;
            default:
                yield $data[$i];
        }
    }
}

function input() {
    if (isset($_POST['text'])) {
        $text = "";
        $count = 0;
        $data = $_POST["text"];
        foreach (symbol($data, $count) as $value) { //по умолчанию в foreaсh создаются копии. Указав амперсанд, создается "ярлык". То есть ссылку на оригинальное значение.
            $text .= $value; //присвоение
        }
        echo $count ."\n";
        echo $text;
    } else {
        include "task2.html";
    }
}
input();