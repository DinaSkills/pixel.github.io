<?php
    require_once( 'defines.php' );
    
Class  instagram_basic_api{
   private $appId = INSTA_APP_ID;
   private $appSecret = INSTA_APP_SECRET;
   private $redirectUrl= INSTA_APP_REDIRECT_URI;
   private $getCode ='';
   private $apiBaseUrl = 'https://api.instagram.com/';

   public $authorizationUrl = '';


		function __construct( $params ) {
			// save instagram code
			$this->_getCode = $params['get_code'];

			// get authorization url
			$this->_setAuthorizationUrl();
   }

   private function setAuthrizationUrl(){
         $getParams = array(
                'app_id' => $this->appId,
                'rederect_url' => $this->redirectUrl,
                'scope' => 'user_profile,user_media',
                'response_type' => 'code'
         );
         
         // Create url 
         $this->authorizationUrl = $this->apiBaseUrl . 'oauth/authorize?' . http_build_query($getParams);

   }

}