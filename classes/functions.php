<?php

    class functions  
    {
        public function getData($link) {

            $curl = curl_init();
        
            curl_setopt_array($curl, array(
              CURLOPT_URL => "https://api.quarantine.country/api/v1/summary/{$link}",
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => "",
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => "GET",
            ));
            
            $response = curl_exec($curl);
            
            curl_close($curl);
            
            $json = json_decode($response);
            return $json;
        
        }
       /* --- function get url --- */
       public function getUrl($type, $admin = false)
       {
           $to = '';
           global $website;
           if ($admin == false) {
               $admin = '';
           } else {
               $admin = 'admin/';
           }
           switch ($type) {
               case 'home':
                   $to .= $website.$admin;
                   break;
               case 'css':
                   $to .= $website.$admin.'layouts/css/';
                   break;
               case 'js':
                   $to .= $website.$admin.'layouts/js/';
                   break;
               case 'img':
                   $to .= $website.$admin.'layouts/img/';
                   break;
           }

           return $to;
       }
}
