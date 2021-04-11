<?php

class Jingle
{
    private static $path = "jingles/";

    public static function getAll()
    {
        $jingles = [];

        $files = scandir(self::$path);
        foreach ($files as $key => $f) {
            if ($f != "." && $f != "..") {
                array_push($jingles, $f);
            }
        }
        return $jingles;
    }

    public static function upload()
    {
    }
}
