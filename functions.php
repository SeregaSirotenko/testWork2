<?php

header('Content-Type: text/html; charset=utf-8');

/**
* Функция реализует функционал чата
*
* @author Sergey
* @param string $text string to output
* @return string
*/
function robotChat($text){

    switch ($text) {
        case 'Привет':
            return 'И тебе привет';
            break;

        case 'Как дела?':
            return 'Замечательно, спасибо!';
            break;

        case 'Чем занимаешься?':
            return 'Собираюсь кушать!';
            break;

        default:
            return 'Я еще не способен ответить на такой вопрос!';
    }
}