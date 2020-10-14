<?php
    require_once( 'defines.php' );
    
Class  instagram_basic_api{
   private $instaId = INSTA_APP_ID;
   private $instaSecret = INSTA_APP_SECRET;
   private $instaRedirect= INSTA_APP_REDIRECT_URI;
   private $getCode ='';
   private $appBaseUrl = 'https://api.instagram.com/';

   public $authorizationUrl = '';


   function __construct($params){
      $this->getCode = $params['get_code'];


    $this->setAuthrizationUrl();
   }

   private function setAuthrizationUrl(){
         $getParams = array(
                'app_id' => $this ->instaId,
                'rederect_url' => $this ->instaRedirect,
                'scope' => 'user_profile,user_media',
                 'response_type' => 'code'
         );
         
         // Create url 
         $this->authorizationUrl = $this->appBaseUrl . 'oauth/authorize?' . 
        http_build_query($getParams);

   }

}