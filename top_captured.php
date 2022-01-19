<?php

use Traits\Sql\TopEscapes;

require_once './traits/sql/TopCaptured.php';
    $sql = new TopEscapes( );
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
                <h2 class="text-center text-white mb-4 mt-4">TOP FLAGS CAPTURED</h2>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <tr class="success">
                            <th class="text-center">#</th>
                            <th>Avatar</th>
                            <th>Nick</th>
                            <th>Flags Captured</th>
                        </tr>

                        <?php $sql->topEscapes( )?>
                    
                    </table>
                    <h4 class="text-center text-white mb-4 mt-4">By Hypnotize</h4>
                </div>
            </div>
        </div>
    </div>
</body>
</html>