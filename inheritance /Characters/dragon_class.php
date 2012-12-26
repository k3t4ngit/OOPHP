<?php
	
	class dragon extends character
	{
		public function __construct($hp,$dmg){
			echo "\n previous hitpoint ".$this->hp;
			echo "\n previous damage ".$this->dmg;
			// echo $this->dmg;
			$this->hp=$hp;
			$this->dmg=$dmg;
			// echo 1;
			echo "\nCurrent hitpoint ".$this->hp;
			echo "\nCurrent damage ".$this->dmg;
			// echo $this->dmg;
			parent::__construct();
		}

	}