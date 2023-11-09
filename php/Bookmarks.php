<?php

class Bookmark
{

    static function ReadFile($file)
    {
        $content = file_get_contents($file);
        $bookmarks = json_decode($content, true);
        return $bookmarks;
    }


}

?>