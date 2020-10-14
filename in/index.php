<?php
 require_once("instagram_basic_api.php");

 $params= array(
        'get_code' => isset($_GET['code']) ? $_GET['code'] : '' 
    
    );

    $IG = new instagram_basic_api( $params );



?>
<a href="<?= $IG->authorizationUrl; ?>">
   Get Instagram
</a>