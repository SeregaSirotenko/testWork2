<?php

function robotChat($text){

	switch ($text) {
		case 'Привет':
			echo "И тебе привет";
			break;
		
		case 'Как дела?':
			echo "Замечательно, спасибо!";
			break;

		case 'Чем занимаешься?':
			echo "Собираюсь кушать!";
			break;	
	}
}

?>