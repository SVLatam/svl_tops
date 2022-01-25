<?php

use Traits\Sql\Top15;

require './traits/sql/top_ref.php';
    $sql = new Top15();
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
                <h2 class="text-center text-white mb-4 mt-4">TOP VOTOS</h2>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr class="success">
                                <th class="text-center">#</th>
                                <th>Avatar</th>
                                <th>Nick</th>
                                <th>Votos</th>
                            </tr>
                        </thead>
                        <tbody id="player-table">
                            <?php $sql->__fnShowTop15( ); ?>
                        </tbody>
                        
                    
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>