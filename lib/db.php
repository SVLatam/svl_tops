<?php
namespace Lib;

use PDO;
use PDOException;

trait db
{
    private $host = "ip";
    private $user = "usr";
    private $password = "pw";
    private $db = "db";
    private $charset = "utf8mb4";

    
    private function __fnConectar( )
    {
        try
        {
            $conexion = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
            $pdo = new PDO( $conexion, $this->user, $this->password );
            return $pdo;
        }
        catch( PDOException $e )
        {
            echo 'err';
            print_r( "Error en la conexión: " . $e );
        }
    }
}

?>
