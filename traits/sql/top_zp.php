<?php

namespace Traits\Sql;

use Lib\db;
use Traits\Utils;

require_once './lib/db.php';
require_once './traits/Utils.php';

class Top15 {
  use db, Utils;

  public function __fnShowTop15( )
  {
      $num = 1;
      $query = $this->__fnConectar( )->prepare( "SELECT * FROM zp_cuentas INNER JOIN zp_level ON id = id_cuenta ORDER BY level DESC, reset DESC, exp DESC LIMIT 15" );
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
                  <td>'. $aRow[ 'level' ] .'</td>
                  <td>'. $aRow[ 'reset' ] .'</td>
                  <td>'. $aRow[ 'exp' ] .'</td>
              </tr>
          ';
          
          ++$num;
          //
      }
  }
}
