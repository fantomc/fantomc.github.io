<?php

/*
	Шлюз между Яндекс.Колонкой и MQTT сервером
	Author: Sergey Avdeev <avdeevsv91@gmail.com>
	URL: https://github.com/avdeevsv91/alice-to-mqtt
*/


// Параметры авторизации
define('ACCESS_ALLOW_PIN_CODE',		'4774');	// Пин-код для добавления новых устройств
define('INVALID_PIN_CODE_LIMIT',	5);			// Лимит неправильных попыток ввода пин-кода
define('INVALID_PIN_CODE_TIMEOUT',	3600);		// Время бана в секундах

// MQTT
define('MQTT_SERVER',	'farmer.cloudmqtt.com');	// Адрес
define('MQTT_PORT',		10470);					// Порт
define('MQTT_LOGIN',	'fantom');				// Логин
define('MQTT_PASSWORD',	'mqtt');				// Пароль

// Устройства
$SMART_DEVICES = array(
	// Весь свет в квартире
	'all-light' => array('весь свет', 'все освещение', 'все лампочки'),
	// Спальня
	'room1-light' => array('свет в спальне', 'освещение в спальне', 'люстру в спальне'),
	// Зал
	'room2-light' => array('свет в комнате', 'освещение в комнате', 'люстру в комнате'),
	// Кухня
	'kitchen-light' => array('свет на кухне', 'освещение на кухне', 'люстру на кухне'),
	// Ванная
	'bathroom-light' => array('свет в ванной', 'свет в ванне', 'освещение в ванной', 'освещение в ванне'),
);
