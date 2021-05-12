<?php

class Rectangle implements AreaInterface
{
    protected int $x;
    protected int $y;
    protected int $width;
    protected int $height;
    
    public function __construct(int $x, int $y, int $width, int $height)
    {
        $this->x = $x;
        $this->y = $y;
        $this->width = $width;
        $this->height = $height;
    }
    
    public function area(): int
    {
        return $this->height * $this->width;
    }
}