<?php

header('Content-Type: text/html; charset=utf-8');

/**
*@param string $text string to output
*@author Sergey
*@return string
*/
function robotChat($text){

    switch ($text) {
        case 'Привет':
            return "И тебе привет";
            break;

        case 'Как дела?':
            return "Замечательно, спасибо!";
            break;

        case 'Чем занимаешься?':
            return "Собираюсь кушать!";
            break;

        default:
            echo "Я еще не способен ответить на такой вопрос!";
    }
}