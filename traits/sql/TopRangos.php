<?php

namespace Traits\Sql;

use Lib\db;
use Traits\Utils;

require_once './lib/db.php';
require_once './traits/Utils.php';

class TopRangos {
  use db, Utils;

  private $insigneas = array(
    "./assets/0.png",
    "./assets/1.png",
    "./assets/2.png",
    "./assets/3.png",
    "./assets/4.png",
    "./assets/5.png",
    "./assets/6.png",
    "./assets/7.png",
    "./assets/8.png",
    "./assets/9.png",
    "./assets/10.png",
    "./assets/11.png",
    "./assets/12.png",
    "./assets/13.png",
    "./assets/14.png",
    "./assets/15.png",
    "./assets/16.png",
    "./assets/17.png",
    "./assets/18.png"
  );

  private $rangos = array(
    "Unranked",
    "Silver I",
    "Silver II",
    "Silver III",
    "Silver IV",
    "Silver Elite",
    "Silver Elite Master", 
    "Gold Nova I",
    "Gold Nova II",
    "Gold Nova III",
    "Gold Nova Master",
    "Master Guardian I",
    "Master Guardian II",
    "Master Guardian Elite",
    "Distinguished Master Guardian",
    "Legendary Eagle",
    "Legendary Eagle Master",
    "Supreme Master First Class",
    "The Global Elite"
  );
  /*
    CREATE TABLE csgo_table2 
    (
        id_cuenta INT PRIMARY KEY NOT NULL,
        rango int(2) NOT NULL DEFAULT '0',
        frags int(10) NOT NULL DEFAULT '0',
        hs int(10) NOT NULL DEFAULT '0',
        kills int(10) NOT NULL DEFAULT '0',
        deaths int(10) NOT NULL DEFAULT '0'
    );
  */
  public function __fnShowTopRangos( )
  {
      $num = 1;
      $query = $this->__fnConectar( )->prepare( "SELECT * FROM zp_cuentas INNER JOIN csgo_table2 ON id = id_cuenta ORDER BY rango DESC, frags DESC LIMIT 15" );
      $query->execute( );

      while( $aRow = $query->fetch( ) )
      {
        echo 
        '
          <tr>';
            if($num == 1)
              echo '<td class="text-center"><img src="./assets/image_processing20200511-25230-1d5tage.png" alt="Girl in a jacket" width="30" height="30"></td>';
            else if($num == 2)
              echo '<td class="text-center"><img src="./assets/image_processing20200511-32371-okxtro.png" alt="Girl in a jacket" width="30" height="30"></td>';
            else if($num == 3)
              echo '<td class="text-center"><img src="./assets/image_processing20200511-10310-1y5kc6y.png" alt="Girl in a jacket" width="30" height="30"></td>'; 
            else 
              echo '<td class="text-center">'. $num .'</td>';
        echo 
        '     
            <td><img src="'. $this->getImagen($aRow[ 'steam_id' ]) .'" width="50px" height="50px"></td>
            <td>'. $aRow[ 'Pj' ] .'</td>
            <td>'. $this->rangos[$aRow[ 'rango' ]] .'</td>
            <td>'. $aRow[ 'frags' ] .'</td>
            <td><img src="'. $this->insigneas[$aRow[ 'rango' ]] .'"></td>
          </tr>
        ';
        
        ++$num;
      }
  }
}