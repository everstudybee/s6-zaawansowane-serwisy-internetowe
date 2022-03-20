<?php
    include "Klient.php";
    include "StalyKlient.php";
    
    for ($i = 1; $i <= 5; $i++)
    {
        $klient = new Klient("WSB " . $i);
        echo $klient . "<br/>";
    }
    
    $klient = new StalyKlient("Pepsi", 0.3);
    echo $klient . "<br/>";
    
    $klient = new Klient ("Pepsi");
    
    // echo 'isset($klient->nazwa)';
    // // pole nazwa ma prywatny modyfikator dostępu
    // echo isset($klient->nazwa) ? " Tak" : " Nie";
    // echo "<br />";
    
    //brak pola rabat
    // echo 'isset($klient->rabat) ';
    // echo isset($klient->rabat) ? "Tak" : "Nie";
    
    //pole nazwa ma prywatny modyfikator dostępu
    // echo 'isset($klient->nazwa) ';
    // echo isset($klient->nazwa) ? "Tak" : "Nie";
    
    //pole 'pole' jest publiczne i istnieje
    echo 'isset($klient->pole) ';
    echo isset($klient->pole) ? "Tak" : "Nie";
    
    echo "<br><br><br>### Porównywanie obiektów ###<br><br>";
    
    $klient1 = new Klient("WSB-NLU");
    $klient2 = new Klient("WSB-NLU");
    
    echo "Klient1<br />";
    echo $klient1 . "<br />";
    echo "Klient2<br />";
    echo $klient2 . "<br />";
    echo "<br />";
    echo '$klient1 == $klient2';
    echo $klient1 == $klient2 ? ", Tak<br />" : ", Nie<br />";
    echo '$klient1 === $klient2';
    echo $klient1 === $klient2 ? ", Tak<br />" : ", Nie<br />";
    echo "<br /><br />";
    
    $klient2->setNazwa("Pepsi");
    echo "Klient1<br />";
    echo $klient1 . "<br />";
    echo "Klient2<br />";
    echo $klient2 . "<br />";
    echo "<br />";
    echo '$klient1 == $klient2';
    echo $klient1 == $klient2 ? ", Tak<br />" : ", Nie<br />";
    echo '$klient1 === $klient2';
    echo $klient1 === $klient2 ? ", Tak<br />" : ", Nie<br />";
    
    // Publiczne pole
    echo "<br /><br />PUBLICZNE POLE<br /><br />";
    $klient = new Klient("Klient");
    $klient1 = new StalyKlient("StalyKlient1", 20);
    $klient2 = new StalyKlient("StalyKlient2", 10);
    
    echo isset($klient->pole) ? "Tak" : "Nie";
    echo "<br>";
    echo $klient->getTowar()->getNazwa();
    echo "<br>";
    $klient->getTowar()->setNazwa("test");
    echo $klient->getTowar()->getNazwa();
    echo "<br>";
    
    // Klonowanie
    echo "<br /><br />KLONOWANIE<br /><br />";
    $klient2 = clone $klient1;
    
    echo "Klient1<br />";
    echo $klient1 . "<br />";
    echo "Klient2<br />";
    echo $klient2 . "<br />";
    
    echo "Przypisywanie... <br />";
    $klient1->setNazwa("Sprite");
    $klient1->getTowar()->setNazwa("AGD");
    
    echo "Klient1<br />";
    echo $klient1 . "<br />";
    echo "Klient2<br />";
    echo $klient2 . "<br />";
    
    // Serializacja
    echo "<br /><br />SERIALIZACJA<br /><br />";
    echo isset($klient) ? $klient . "<br />" : "Brak<br />";
    
    session_start();
    echo "Sesja uruchomiona <br />";
    $serialized = "SERIALIZED";
    
    $_SESSION[$serialized] = serialize($klient);
    $klient = null;
    
    echo isset($klient) ? $klient . "<br />" : "Brak<br />";
    echo $_SESSION[$serialized] . "<br /><br />";
    
    $klient = unserialize($_SESSION[$serialized]);
    echo isset($klient) ? $klient . "<br />" : "Brak<br />";
