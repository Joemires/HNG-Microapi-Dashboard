<?php

class Script
{
   public $subdomain=[];

   private function JsonDecode(){
        $files=file_get_contents("php_file.json");
        $subdomainsArray=json_decode($files, true);
        return $subdomainsArray;
   }


   public function subdomainArr()
   {
   $files=file_get_contents("scrap/log.json");
   $data=json_decode($files, true);
     return $data;

   }

   public function team()
{

  $files=file_get_contents("scrap/team_neon.json");
  $data=json_decode($files, true);
     return $data;
}


}





?>
