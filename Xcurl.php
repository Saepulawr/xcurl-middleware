<?php
    class XCURL{
        
        public function post($url,$header = array(),$data=array()){
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL,$url);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS,$data);  //Post Fields
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            $server_output = curl_exec ($ch);
            curl_close ($ch);
            return $server_output;
        }
        public function get($url,$header = array(),$data=array()){
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL,$url);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS,$data);  //Post Fields
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            $server_output = curl_exec ($ch);
            curl_close ($ch);
            return $server_output;
        }
    }
?>