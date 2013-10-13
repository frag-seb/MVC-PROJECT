<?php
/**
 * 
 * Enter description here ...
 * @author Jochen
 *
 */
	class Request{
		
		private $_controller;

		private $_method;

		private $_args;

		public function __construct(){
			$parts = explode('/',$_SERVER['REQUEST_URI']);
			$parts = array_filter($parts);
			
			$this->_controller = ($c = array_shift($parts))? $c : START_PAGE;
			$this->_method = ($c = array_shift($parts))? $c : START_PAGE;
			$this->_args = (isset($parts[0])) ? $parts : array();
		}
        private function setRequest($parts){
            $this->_parts = $parts;
        }
		public function getController(){
			return $this->_controller;
		}
		public function getMethod(){
			return $this->_method;
		}
		public function getArgs(){
			return $this->_args;
		}
	}
