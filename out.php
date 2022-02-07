<?php

require "store.php";

class Entrada extends Store{
    
    public function __construct(
        $nombre,  
        $precio, 
        $stock, 
        $id,
        $state,
        $destino,
        public string $entrega 
    )
    {
        parent::__construct($nombre, $precio, $stock, $id, $state,$destino);
    }

    public function getInfo(){
        echo parent::getinfo();
        $result = "Entrega: $this->entrega <br>";
        return $result;
    }

    /*public function getBoton(){
        $boton = "<td> <input type='submit' name='Submit' value='Cerrar Sesión'/></td>";
        $boton = "<a href='logout.php'>Cerrar sesión</a>";
        return $boton;
    }*/
}
echo "<h2>POR LLEGAR</h2>";
$tienda3 = new Entrada(
    'Xbox Series X',
    '$12,00.00',
    3,
    3,
    'Proximo destino',
    'Sin destino',
    '14/02/2022'
);
echo $tienda3->getInfo();
echo "<br></br>";

$tienda4 = new Entrada(
    'POCO X3 NFC',
    '$4,500.00',
    1,
    4,
    'Proximo a entregar',
    'Sin destino',
    '26/02/2022'
);
echo $tienda4->getInfo();
echo "<br></br>";


echo $boton = "<a href='logout.php'>Cerrar sesión</a>";
