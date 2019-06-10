<?php

class Languages {

    // языки из конфига languages.php
    private static $languages;

    // получение языков из конфига
    private static function get(): array {
        if (self::$languages) {
            return self::$languages;
        }

        return self::$languages = require('configs/languages.php');
    }

    // получение списка языков для выпадашки языков
    public static function getList(): array {
        $current_language = self::getCurrent();
        
        return array_filter(self::get(), function ($language) use ($current_language) {
            return $language !== self::getCurrent();
        });
    }

    // получение текущего языка
    public static function getCurrent(): string {
        $language = $_COOKIE['language'] ?? substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        $language = in_array($language, self::get()) ? $language : self::get()[0];

        return $language;
    }
}