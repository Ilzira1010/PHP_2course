<?php

use errors\Exception1;
use errors\Exception2;
use errors\Exception3;
use errors\Exception4;
use errors\Exception5;


spl_autoload_register(function ($className) {
    require_once __DIR__ . "/" . str_replace("\\", "/", $className) . ".php";
});

$exc = new Class_exception();
$Class_exception = get_class_methods($exc);

foreach ($Class_exception as $generator) {
    try {
        $exc->$generator();
    } catch (Exception1 $e) {
        echo $e->getMessage() . "\n";
    } catch (Exception2 $e) {
        echo $e->getMessage() . "\n";
    } catch (Exception3 $e) {
        echo $e->getMessage() . "\n";
    } catch (Exception4 $e) {
        echo $e->getMessage() . "\n";
    } catch (Exception5 $e) {
        echo $e->getMessage() . "\n";
    } catch (Exception $e) {
        echo $e;
    }
}
