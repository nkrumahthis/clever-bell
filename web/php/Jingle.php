<?php

class Jingle
{
    private static $path = "jingles/";

    public static function show()
    {
        $jingles = [];

        $files = scandir(self::$path);
        foreach ($files as $key => $f) {
            if ($f != "." && $f != "..") {
                array_push($jingles, $f);
            }
        }
        var_dump($jingles);
        var_dump($files);
        return $jingles;
    }
}
