<?php 
    // Root
    echo __dir__;
    // Server Name
    echo "<pre>";
    print_r($_SERVER["DOCUMENT_ROOT"]);
    echo "</pre>";    
    // System Root
    echo "<pre>";
    print_r($_SERVER["SystemRoot"]);
    echo "</pre>";
    echo "<br>";
    
    //  Open SSL Configuration
    echo "<pre>";
    print_r($_SERVER["OPENSSL_CONF"]);
    echo "</pre>";
    echo "<br>";
   


?>