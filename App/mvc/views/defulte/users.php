<!DOCTYPE html>
<html>
    <head>
        <title>Users` List</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../../../css/styles.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h1>Users` List</h1>
            <?php
            if ($data_params['param']) {
                echo "<ol>";
                foreach ($data_params['param'] as $user) {
                    echo "<li>{$user['usern']} 
                    <br>
                    {$user['email']}</li>";
                }
                echo "</ol>";
            }
            ?>
        </div>
    </body>
    <script src="../../../../js/app.js"></script>
</html>