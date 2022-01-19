<?php

    require_once 'mysql.php';
    $sql = new mysql( );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TOP PLAYERS</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center text-white mb-4 mt-4">TOP PLAYERS</h2>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <tr class="success">
                            <th class="text-center">#</th>
                            <th>Nick</th>
                            <th>Referencias</th>
                        </tr>

                        <?php $sql->__fnRefs( )?>
                    
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>