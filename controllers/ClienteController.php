<?php

namespace Controllers;

use Exception;
use Model\Cliente; 
use MVC\Router; 

class ClienteController {

    public static function estadisticas(Router $router){
        $router->render('cliente/estadisticas');
    }


    public static function detalleVentasAPI(){
        try {

            $sql = 'SELECT 
                        cli_nombre AS nombre,
                        cli_cantidad AS cantidad
                        FROM cliente;';

            $datos = Cliente::fetchArray($sql);
            
            echo json_encode($datos);
        } catch (Exception $e) {
            echo json_encode([
                'detalle' => $e->getMessage(),
                'mensaje' => 'Ocurrió un error', 
                'codigo' => 0
            ]);
        }
    }



}