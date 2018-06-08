<?php
    #$_SERVER superglobal

    $server = [
        'Server Address' => $_SERVER['SERVER_ADDR'],
        'Server Software' => $_SERVER['SERVER_NAME'],
        'Document Root' => $_SERVER['DOCUMENT_ROOT'],
        'Script Filename' => $_SERVER['SCRIPT_FILENAME'],
        'Current Page' => $_SERVER['PHP_SELF']
    ];

    $client = [
        'Client System Info' => $_SERVER['HTTP_USER_AGENT'],
        'Client IP' => $_SERVER['REMOTE_ADDR'],
        'Remote Port' => $_SERVER['REMOTE_PORT']
    ];
?>