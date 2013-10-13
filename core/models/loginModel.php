<?php
/**
 * 
 * Enter description here ...
 * @author Jochen
 *
 */
	class loginModel extends baseModel{
		
		public function getEntries(){
			$return = array();
			$return[0] = array('title'=>'Bitte einlogen.');
			$return[1] = array('title'=>'Test zum Einloggen.');

			return $return;
		}
	}