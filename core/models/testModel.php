<?php
/**
 * 
 * Enter description here ...
 * @author Jochen
 *
 */
	class testModel extends baseModel{
		
		public function getEntries(){
			$return = array();
			$return[0] = array('title'=>'hello dffd test');
			$return[1] = array('title'=>'hello universe');

			return $return;
		}
	}