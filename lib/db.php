<?php
namespace Lib;

use PDO;
use PDOException;

trait db
{
    private $host = "45.58.56.30";
    private $user = "adminpanel";
    private $password = "obidiotapia";
    private $db = "svlmexico";
    private $charset = "utf8mb4";

    /*
    new const MYSQL_HOST[] = "db.serverscstrike.com";
    new const MYSQL_USER[] = "scs_lwforever21";
    new const MYSQL_PASS[] = "Fqm6b6BbC6WLERnu";
    new const MYSQL_DATEBASE[] = "scs_lwforever21";

     */
    
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