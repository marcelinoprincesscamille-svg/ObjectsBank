<!---Marcelino, Princess Camille
CYB 201
JAN 14, 2026--->
<?php
class Account{
    public int $number;
    public string $type;
    public float $balance;

    public function __construct(int $number, string $type, float $balance=0.00){
        $this->number=$number;
        $this->type=$type;
        $this->balance=$balance;
    }
    public function withdraw (float $amnt): float{
        $this->balance -= $amnt;
        return $this->balance;
    }
    public function deposit (float $amnt): float{
        $this->balance += $amnt;
        return $this->balance;
    }
}
?>