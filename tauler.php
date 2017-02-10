<?php
require 'quadre.php';

class Tauler{

	private $peces=array();
	private $tipus;
	private $nRows=null;
	private $nCols=null;

	function __construct($nRows=null,$nCols=null,$tipus){
		$this->tipus=$tipus;
		$this->nCols=$nCols;
		$this->nRows=$nRows;

			switch ($this->tipus) {
				case 'escac':

				$this->escac($this->nRows,$this->nCols,$this->tipus);

				break;
				case 'aleat':

				$this->aleat($this->nRows,$this->nCols,$this->tipus);

				break;
				
			}

		}

		function escac($nRows,$nCols,$tipus){
		$this->nRows=$nRows;
		$this->nCols=$nCols;
		$this->tipus=$tipus;
		$cont=0;

		for($i=0;$i<$nRows;$i++){
			$cont++;

			for($j=0;$j<$nCols;$j++){
				


				if($cont%2==0){

				$this->peces[$i][$j]=new Quadre("white");
			}else{
				$this->peces[$i][$j]=new Quadre("black");

			}
			$cont++;
		
		
			}
		}

		}


		function aleat($nRows,$nCols,$tipus){
		$this->nRows=$nRows;
		$this->nCols=$nCols;
		$this->tipus=$tipus;
			
		for($i=0;$i<$nRows;$i++){


			for($j=0;$j<$nCols;$j++){

				$ale=rand(0,1);

				if($ale==0){

				$this->peces[$i][$j]=new Quadre("white");
			}else{
				$this->peces[$i][$j]=new Quadre("black");

			}


		}

	}	


		}


	function show(){
		echo "<body bgcolor='tomato'>";
		echo "<table border=1>";
				for($i=0; $i < $this->nRows; $i++){
			echo '<tr>';

				for($j=0; $j < $this->nCols; $j++)
    		{
        		$this->peces[$i][$j]->show();
    		}
    		echo '</tr>';	
	}
	echo '</table>';

}



}