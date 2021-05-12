<?php

class Square implements AreaInterface, DrawingInterface
{
    protected int $x;
    protected int $y;
    protected int $width;
    
    public function __construct(int $x, int $y, int $width)
    {
        $this->x = $x;
        $this->y = $y;
        $this->width = $width;
    }
    
    public function area(): int
    {
        return $this->width ** 2;
    }
    
    public function draw()
    {
        //
    }
}