<?php

declare(strict_types=1);

final class Wagon
{
    private int $seats; //posti totali
    private int $passangers = 0; //posti dei passeggeri nel vagone 
    

    public function __construct(private int $seat)
    {
        $this->seats = $seat;
    }

    public function passangers_count()
    {
        return $this->passangers;
    }

    public function seats_count()
    {
        return $this->seats;
    }

    public function add_passangers(int $num)
    {
        $free_seats = $this->seats - $this->passangers;
        if($num >= $free_seats){
            
        }
    }

}






