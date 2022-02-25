<?php
 namespace App\Models;
 use MF\Model\Model;

 class mainModel extends Model{


	 private $id;

	 public function __set($atributo,$valor){
		 $this->$atributo = $valor;
	 }

	 public function __get($atributo){
		 return $this->$atributo;
	 }

	 public function main(){
		 return 'ola';
	 }#end function main


 }#end class

?>
