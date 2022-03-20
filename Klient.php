<?php
    include "Towar.php";
    
    class Klient
    {
        private int $iD;
        public int $pole;
        private string $nazwa;
        private static int $numer = 0;
        private Towar $towar;
        
        public function getId(): int
        {
            return $this->iD;
        }
        
        public function setId(int $iD): void
        {
            $this->$iD = $iD;
        }
        
        public function getNazwa(): string
        {
            return $this->nazwa;
        }
        
        public function setNazwa(string $nazwa): void
        {
            $this->$nazwa = $nazwa;
        }
        
        public function getTowar(): Towar
        {
            return $this->towar;
        }
        
        public function setTowar(Towar $towar): void
        {
            $this->towar = $towar;
        }
        
        public function __construct(string $nazwa)
        {
            $this->nazwa = $nazwa;
            $this->iD = self::$numer++;
            $this->pole = 2;
            $this->towar = new Towar("null");
            echo "Hello " . $this->getNazwa() . "<br>";
        }
        
        public function __destruct()
        {
            echo "Bye: " . $this->getNazwa() . "<br>";
        }
        
        public function __toString()
        {
            return "Nazwa: " . $this->getNazwa() . " Id: " . $this->getId() . " " . $this->getTowar();
        }
        
        public function __isset($name)
        {
            echo "<script>alert('Brak pola $name')</script>";
        }
    }