<?php

interface colorable
{
    public function howToColor();
}

class Square implements colorable
{
    public function howToColor()
    {
        echo "Color all four sides";  // TODO: Implement howToColor() method.
    }
}

?>
