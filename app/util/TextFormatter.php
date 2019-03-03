<?php

namespace App\Util;

class TextFormatter {
    public static function format($text) {
        $res = mb_split("\n", $text);
        for ($i = 0; $i < count($res); $i++) {
            $matches = [];
            if (preg_match("/Источник: /", $res[$i], $matches)) {
                $res[$i] = str_replace("Источник: ", "", $res[$i]);
                $res[$i] = "<b>" . $matches[0] . "</b><a href='" . $res[$i] . "'>" . $res[$i] . "</a>";
            } else {
                $res[$i] = "<p>".$res[$i]."</p><br>";
            }
        }

        $result = "";

        foreach ($res as $r) {
            $result .= $r;
        }

        return $result;
    }
}