<?php
class OC_Theme {

   private $ThemeName;

   function __construct() {
      $this->ThemeName = "ownCambo";
   }
   
   public function getName() {
      return $this->ThemeName;
   }
   
   public function getTitle() {
		return $this->ThemeName;
   }

}