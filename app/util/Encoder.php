<?php

namespace App\Util;

class Encoder {
    public static function encode($str) {
        return base64_encode($str);
    }

    public static function decode($str) {
        return base64_decode($str);
    }

    public static function generatePassword() {
        $chars = "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM!@#$%^&*()1234567890";
        $max = 10;
        $size = strlen($chars)-1;
        $password = null;

        while ($max--) {
            $password .= $chars[rand(0, $size)];
        }

        return self::encode($password);
    }
}