<?php
    
    use JetBrains\PhpStorm\Pure;
    
    class Klient
    {
        private static int $numer =1;
        private string $nazwa;
        private int $iD;
        public int $pole;
        
        public function getId(): int
        {
            return $this->iD;
        }
        public function setID(int $iD): void
        {
            $this->iD = $iD;
        }
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
            // echo "Klient został stworzony<br />";
            $this->nazwa = $nazwa;
            //$this->iD = self::$numer++;
            $this->iD =1;
            $this -> pole = 2;
        }
        public function __destruct()
        {
            // echo "Klient został zniszczony<br />";
        }
        public function __toString()
        {
            return "Nazwa: " . $this->getNazwa() . " ID: " . $this->getId();
        }
        public function __isset($name){
            echo "<script>alert('Brak pola $name')</script>";
        }
    }