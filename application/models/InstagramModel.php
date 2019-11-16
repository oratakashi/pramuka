<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class InstagramModel extends CI_Model {
    
        public function read()
        {
            $url = "https://api.instagram.com/v1/users/self/media/recent/?access_token=4495532477.1677ed0.b08595a9d6034415897b186be829e226&count=10";
            //  Initiate curl
            $ch = curl_init();
            // Will return the response, if false it print the response
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            // Set the url
            curl_setopt($ch, CURLOPT_URL,$url);
            // Execute
            $result=curl_exec($ch);
            // Closing
            curl_close($ch);

            // Will dump a beauty json :3
            return json_decode($result, true);
        }
        
        public function read_profile()
        {
            $url = "https://api.instagram.com/v1/users/self?access_token=4495532477.1677ed0.b08595a9d6034415897b186be829e226&count=10";
            //  Initiate curl
            $ch = curl_init();
            // Will return the response, if false it print the response
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            // Set the url
            curl_setopt($ch, CURLOPT_URL,$url);
            // Execute
            $result=curl_exec($ch);
            // Closing
            curl_close($ch);

            // Will dump a beauty json :3
            return json_decode($result, true);
        }
    }
    
    /* End of file InstagramModel.php */
    
?>