<?php
    
class file{
     static public function cf($folder){
     if(! is_dir($folder_name)){
 	mkdir($folder_name);
     return true;
     }else{
     return false;
     }
     }
     static public function is_dir($folder){
     return is_dir($folder_name);
     }
     static public function df($folder_name){
     if(is_dir($folder_name)){
     rmdir($folder_name);
     return true;
     }else{
     return false;
     }
     }
     static public function cfile($file_name){
     if(! file_exists($file_name)){
 	touch($file_name);
     return true;
     }else{
 	return false;
     }
     }
     static public function dfile($file_name){
     if(file_exists($file_name)){
     unlink($file_name);
     return true;
     }else{
     return false;
     }
     }
     static public function is_file($file_name){
     return file_exists($file_name);
     }
     static public function edit_name($file_name , $file_add){
     if(file_exists($file_name)){
     rename($file_name, $file_add);
     return true;
     }else{
     return false;
     }
     }
     static public function edit_ad($file_name , $file_add){
     if(file_exists($file_name)){
 	rename($file_name, $file_add);
     return true;
     }else{
 	return false;
     }
     }
     static public function copy_file($file_name , $file_add){
     if(file_exists($file_name)){
 	copy($file_name,$file_add);
     return true;
     }else{
 	return false;
     }
     }
     static public function sf($string , $file_name){
     if(file_exists($file_name)){
     $file = file_get_contents($file_name);  
     if (strstr($file, $string)){
     return true;
     }else{
     return false;
     }
     }else{
     return false;
     }
     }
     static public function wf($file,$text){
	 $file = fopen($file,"w");
     fwrite($file,$text);
     fclose($file);
     }
     static public function read($file){
     $file = fopen($file, "r");
     while( !feof($file) ){
     echo fgets($file) . "<br>";
     }
     fclose($file);
     }
     
     static public function fs($filename){
     $sizeBT = filesize($filename);
     $sizeKB = $sizeBT/1024;
     $sizeMG = $sizeKB/1024;
     $sizes = ['BT' => $sizeBT,'KB' => $sizeKB, 'MG' => $sizeMG];
     return $sizes;
     }
     
}


  
?>
