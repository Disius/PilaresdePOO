<?php

class Store {
    //Propiedades

    //Métodos
    public function __construct(
        private string $nombre,  
        private string $precio, 
        private int $stock, 
        private int $id,
        private string $state,
        private string $destino){
        
    }

    public function getinfo(){
       
        $info = "<br> <b> $this->nombre </b> <br> 
                <br>Estado: <i> $this->state </i> 
                <br>
                precio: $this->precio <br>
                ID: $this->id
                <br>
        ";
        if( $this-> stock > 0){
            $info .= "Piezas disponibles: <span style='color:green' > $this->stock </span>";
        }else{
            $info .= "<span style='color:red' >
                        No disponible</span>";
        }
        $info = "<b> $this->nombre </b> estado: <i> $this->state </i> <br>
                    precio: $this->precio <br>
                    ID: $this->id
                    <br>
                    <b>Destino: $this->destino</b>
                    <br>
        ";


        return $info;
    }

}

echo "<h1>Almacen</h1> <br>";
echo "<h2>POR SALIR</h2>";
//instancia de la clase libro
$tienda1 = new Store(
    'Freidora de aire',
    '$250.00',
    5,
    1,
    'Salida',
    'Tuxtla Gutierrez Chiapas'
);


echo $tienda1->getinfo();



$tienda2 = new Store(
    'Computadora Gamer',
    '$15,300.00',
    4,
    2,
    'Salida',
    'CDMX'
); 

echo "<br></br>";
echo $tienda2->getinfo();




 


