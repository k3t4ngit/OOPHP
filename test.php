<?php 

	class test{

		public function to(){
			echo "to \n";
			$this->fro();
		}
		public function fro(){
			echo "fro \n";
			try{
			$this->to();
		}
		catch(Ecxeption $e){
			echo "hi";
		}
		}

	}
	$exec= new test;
	$exec->to();
		
	?>