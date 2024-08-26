<?php 

namespace Model;

class Cliente extends ActiveRecord {
    protected static $tabla = 'cliente'; 
    protected static $columnasBD = ['cli_id', 'cli_nombre', 'cli_pro', 'cli_cantidad'];
    protected static $idTabla = 'cli_id';

    public $cli_id; 
    public $cli_nombre;
    public $cli_pro;
    public $cli_cantidad;

    public function __construct($args = []) {
        $this->cli_id = $args['cli_id'] ?? null;
        $this->cli_nombre = $args['cli_nombre'] ?? '';
        $this->cli_pro = $args['cli_pro'] ?? null;
        $this->cli_cantidad = $args['cli_cantidad'] ?? 0;
    }
}
