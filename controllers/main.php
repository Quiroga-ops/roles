<?php

class Main extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->render('main/index');
        echo"<p>Nuevo controlador main</p>";
    }
    function saludo(){
        echo"<p>Ejecuntando metodo saludo; <h1>Hola, bienvenido!</h1></p>";
        
    }
    function despedida(){
        echo"<p>Ejecuntando metodo despedida; <h1>Adios, buen viaje xd</h1> </p>";
    }
}

?>