<html>
    <head>
        <title>Teste SSL</title>
    </head>
    <body style='text-align: center;'>
    <?php
    echo '<h1>Access ' . $_SERVER['REQUEST_SCHEME'] . '</h1>';
    echo date('l jS \of F Y h:i:s A') . '<br>';
    echo 'Welcome earthling!';
    ?><hr>| <a href="https://localhost">HTTPS</a> | <a href="http://localhost">HTTP</a> |<hr><?php

    phpinfo();

    ?>
    </body>
</html>