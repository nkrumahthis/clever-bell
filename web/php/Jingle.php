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
        echo json_encode($_FILES);
        $audiofile = $_FILES["jingle"];
        $filesize = $audiofile["size"];
        if ($filesize < 10485760) {
            $status = move_uploaded_file($audiofile["tmp_name"], self::$path . $audiofile["name"]);
            if (!$status) {
                echo "upload error";
            }
        } else {
            echo "file too big";
        }
    }
}
