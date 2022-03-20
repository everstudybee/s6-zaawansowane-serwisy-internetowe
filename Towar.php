<?php
    
    class Towar
    {
        private string $nazwa;
        
        public function getNazwa(): string
        {
            return $this->nazwa;
        }
        
        public function setNazwa(string $nazwa): void
        {
            $this->nazwa = $nazwa;
        }
        
        public function __construct(string $nazwa)
        {
            $this->nazwa = $nazwa;
        }
        
        public function __toString()
        {
            return "Towar " . $this->getNazwa();
        }
    }