<?php
	class Name
	{
		private $name;

		public function __construct($name) {
			$this->name = $name;
		}

		public function getName($name) {
	    	return $this->name;
	  	}
	}

	$people = new Name("Giang");
	echo $people->getName();
?>
