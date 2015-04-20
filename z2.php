<?php
class Z2{

	public $back_slide = ')';
	public $error = 'Строка не валидна';
	public $ok = 'Строка валидна';

	function __construct($bkt){

		if(self::FirstElement($bkt) != $this->back_slide){

			$explode = preg_split('//', $bkt, -1, PREG_SPLIT_NO_EMPTY);
	 		$i = 0;
	 		while ($i <= count($explode)) {

	 			$open = array_search('(', $explode);
		 		$close = array_search(')', $explode);
		 		if(isset($open) && !empty($close)){
		 			unset($explode[$open]);
		 			unset($explode[$close]);
		 			$i++;
		 			$reply = $this->ok;
		 		}else{
		 			$reply = $this->error;
		 		}
	 		}
		}else{
			$reply = $this->error;
		}
		print $reply;
		//return $reply;
 	}
 	function FirstElement($bkt){
		$explode = preg_split('//', $bkt, -1, PREG_SPLIT_NO_EMPTY);
		return array_shift($explode);
	}
}
$qwe = new Z2('(())');
?>