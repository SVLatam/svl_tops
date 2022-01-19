<?php

use Traits\Sql\TopRangos;

require './traits/sql/TopRangos.php';
    $sql = new TopRangos();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TOP PLAYERS</title>

    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center text-white mb-4 mt-4">TOP PLAYERS</h2>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr class="success">
                                <th class="text-center">#</th>
                                <th>Avatar</th>
                                <th>Nick</th>
                                <th>Rango</th>
                                <th>Frags</th>
                                <th>Insignea</th>
                            </tr>
                        </thead>
                        <tbody id="player-table">
                            <?php $sql->__fnShowTopRangos( ); ?>
                        </tbody>
                        
                    
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>