<?php
define("fileName" , "task6.txt" );

if (filesize(fileName) == 0){
    echo "File is empty";
}
$array = parse_ini_file("index.ini", true );

$fileTxt = $array['main']['filename'];

foreach (file($fileTxt) as $line) {
    if (strpos($line, $array['first_rule']['symbol']) === 0) {
        $written_line = substr($line, strlen($array['first_rule']['symbol']));
        if ($array['first_rule']['upper'] == "true") {
            echo strtoupper($written_line) . '<br>';
        } else if ($array['first_rule']['upper'] == "false") {
            echo strtolower($written_line) . '<br>';
        } else {
            echo $line . " The upper value should only be true/false" . '<br>';
        }
    }
    elseif (strpos($line, $array['second_rule']['symbol']) === 0){
        if ($array['second_rule']['direction'] == '+'){
            for ($i = strlen($array['second_rule']['direction']); $i < strlen($line); $i++) {
                if ($line[$i] == '9'){
                    echo '0';
                }else if ($line[$i] >= '0' && $line[$i] < '9'){
                    echo $line[$i] + 1;
                }else{
                    echo $line[$i];
                }
            }
        }elseif ($array['second_rule']['direction'] == '-'){
            for ($i = strlen($array['second_rule']['direction']); $i < strlen($line); $i++){
                if ($line[$i] == '0'){
                    echo 9;
                }elseif ($line[$i] > '0' && $line[$i] <= '9'){
                    echo $line[$i] - 1;
                }else{
                    echo $line[$i];
                }
            }
        }else{
            echo $line . " The direction value should only be +/-".'<br>';
        }
        echo '<br>';
    }
    elseif (strpos($line, $array['third_rule']['symbol']) === 0){
        for ($i = strlen($array['third_rule']['symbol']); $i < strlen($line); $i++) {
            if ($line[$i] != $array['third_rule']['delete']){
                echo $line[$i];
            }
        }echo '<br>';
    }else{
        echo $line.' <br>';
    }

}
?>