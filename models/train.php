<?php

require_once __DIR__ . '/Wagon.php';

class Train {
    private array $wagons = [];

    public function add_wagon(Wagon $wagon): void {
        $this->wagons[] = $wagon;
    }

    public function seats_count(): int {
        return array_sum(array_map(fn($w) => $w->seats_count(), $this->wagons));
    }

    public function passengers_count(): int {
        return array_sum(array_map(fn($w) => $w->passengers_count(), $this->wagons));
    }

    public function add_passengers(int $count): int {
        foreach ($this->wagons as $wagon) {
            if ($count <= 0) break;
            $count = $wagon->add_passengers($count);
        }
        return $count;
    }

    public function remove_passengers(int $count): int {
        for ($i = count($this->wagons) - 1; $i >= 0; $i--) {
            if ($count <= 0) break;
            $count = $this->wagons[$i]->remove_passengers($count);
        }
        return $count;
    }

    public function passengers_distribution(): array {
        return array_map(fn($w) => $w->passengers_count(), $this->wagons);
    }
}