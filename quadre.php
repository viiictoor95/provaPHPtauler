<?php


	class Quadre{

		protected $color;
		function __construct ($color){

			$this->color=$color;
		
		}

	function setcolor($color){
			$this->color=$color;

		}


	function getcolor(){
			return $this->color;
			
		}		


		function show(){
		echo '<td style="padding-left:2px;background-color:'.$this->color.'">
		<div style=" height:50px; width:50px; overflow:hidden; "</td>';
	}





	}



















