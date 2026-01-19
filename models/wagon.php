<?php

class Wagon {
    private int $seats;
    private int $passengers = 0;

    public function __construct(int $seats) {
        $this->seats = $seats;
    }

    public function seats_count(): int {
        return $this->seats;
    }

    public function passengers_count(): int {
        return $this->passengers;
    }

    public function add_passengers(int $count): int {
        $available = $this->seats - $this->passengers;
        $to_add = min($available, $count);
        $this->passengers += $to_add;
        return $count - $to_add; // passeggeri in eccesso
    }

    public function remove_passengers(int $count): int {
        $to_remove = min($this->passengers, $count);
        $this->passengers -= $to_remove;
        return $count - $to_remove; // passeggeri che non si è potuto rimuovere
    }
}