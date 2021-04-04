<?php
if (isset($_POST["password"])) {
    $password = $_POST["password"];
    if (!preg_match('/.{10}$/', $password)) {
        echo "Длина пароля должна быть не менее 10 символов!";
    } elseif (!preg_match('/.*[A-Z].*[A-Z].*$/', $password)) {
        echo "Пароль должен содержать хотя бы 2 латинских прописных букв";
    } elseif (!preg_match('/.*[a-z].*[a-z].*$/', $password)) {
        echo "Пароль должен содержать хотя бы 2 латинских строчных букв";
    } elseif (!preg_match('/.*[0-9].*[0-9].*$/', $password)) {
        echo "Пароль должен содержать хотя бы 2 цифры";
    } elseif (!preg_match('/.*[%$#_*].*[%$#_*].*$/', $password)) {
        echo "Пароль должен содержать хотя бы 2 спец.символов";
    } elseif (preg_match('/.*[A-Z]{4,}.*$/', $password) || preg_match('/.*[a-z]{4,}.*$/', $password)
        || preg_match('/.*[0-9]{4,}.*$/', $password) || preg_match('/.*[%$#_*]{4,}.*$/', $password)) {
        echo "Пароль не должен содержать более чем 3 символов любой категории подряд";
    } else {
        echo "Пароль надёжный";
    }
} else include "task5.html";
