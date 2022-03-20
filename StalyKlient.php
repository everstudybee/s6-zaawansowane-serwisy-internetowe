<?php
    
    class StalyKlient extends Klient
    {
        private float $rabat;
        
        public function getRabat(): float
        {
            return $this->rabat;
        }
        
        public function setRabat(float $rabat): void {
            $this->rabat = $rabat;
        }
        
        public function __construct(string $nazwa, float $rabat)
        {
            parent::__construct($nazwa);
            $this->rabat = $rabat;
        }
        public function __toString()
        {
            return parent::__toString()." Rabat: ".$this->getRabat();
        }
    }