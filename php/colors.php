<?php

class Colors
{

    static function ReadFile($colorsFileName)
    {
        $content = file_get_contents($colorsFileName);
        $lines = explode("\n", $content);
        return $lines;
    }
    static function MakeList($lines)
    {
        $liste = "";
        foreach ($lines as $line) {
            $colors = explode("|", $line);

            $liste .= Colors::MakeSentence($colors);
        }

        return $liste;
    }

    static function MakeSentence($colors)
    {
        $background = "background-color: " . $colors[1];
        $html = <<<HTML
        <div class="colorContainer">
            <div class="colorSample" style="background-color:$colors[1] " ></div>
            <div>$colors[0]</div>
            <div>$colors[1]</div>
            <div>$colors[2]</div>
        </div>
        HTML;
        return $html;
    }
}