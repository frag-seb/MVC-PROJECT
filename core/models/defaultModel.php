<?php
/**
 * 
 * Enter description here ...
 * @author Jochen
 *
 */
	class defaultModel extends baseModel{
		
		public function getEntries(){
			$return = array();
			$return[0] = array('title'=>'Das ist ein Test.');
			$return[1] = array('title'=>'Variablen werden übergeben');

			return $return;
		}
	}
?>
