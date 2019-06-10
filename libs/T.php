<?php

require_once('libs\Languages.php');

class T {

    // клю к яндексовскому апи
    private static $api_key = 'trnsl.1.1.20190525T083246Z.dd241b3ab60357f0.826ccc368a7982a8267834f3ddfea744ce0f4751';

    // сервис переводов яндекса
    private static $translate_url = 'https://translate.yandex.net/api/v1.5/tr.json/translate';

    // строки из конфига strings.php
    private static $strings;

    // перевод этих строк плученный от яндекса
    private static $translated_strings;

    // метод получения строки по ключу
    public static function _(string $key): string {
        if (Languages::getCurrent() === 'ru') {
            return self::getStrings()[$key] ?? '';
        }

        $translated_strings = self::getTranslatedStrings();

        return $translated_strings[$key] ?? '';
    }

    // получение строк из конфига
    private static function getStrings(): array {
        if (self::$strings) {
            return self::$strings;
        }

        return self::$strings = require('configs/strings.php');
    }

    // метод перевода всех строк STRING на нужный язык используя яндекс апи
    private static function getTranslatedStrings(): array {
        if (self::$translated_strings) {
            return self::$translated_strings;
        }

        $strings = self::getStrings();
        $params  = 'key=' . self::$api_key . '&lang=ru-' . Languages::getCurrent();

        foreach ($strings as $string) {
            $params .= '&text=' . urlencode($string);
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, self::$translate_url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $response = curl_exec($ch);
        curl_close($ch);
        
        $response = json_decode($response);
        $result   = [];
        $index    = 0;
        foreach ($strings as $key => $value) {
            if (empty($response->text[$index])) {
                continue;
            }
            $result[$key] = $response->text[$index];
            $index++;
        }

        return self::$translated_strings = $result;
    }
}