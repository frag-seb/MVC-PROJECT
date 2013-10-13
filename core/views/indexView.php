<?php
/**
 * 
 * Enter description here ...
 * @author Jochen
 *
 */
    class indexView extends baseViews{      
       
        private $path = TEMP_PATH;  
        
        private $template = START_PAGE;
        
        private $plattform = PLATTFORM;
      
        private $_ = array();  
      
        public function assign($key, $value){  
            $this->_[$key] = $value;  
        }  
       
        public function setTemplate($template = START_PAGE){  
            $this->template = $template;  
        }  
        
        public function setPlattform($plattform = PLATTFORM){  
            $this->plattform = $plattform;  
        } 
        public function loadTemplate(){  
            $tpl = $this->template;
            $plattform = $this->plattform;
            $path = SITE_PATH.TEMP_PATH.$plattform.'/';

            $file = $path . $tpl . '.php';
            $exists = file_exists($file);

            if ($exists){  
 
                ob_start();  
 
                include $file;  
                $output = ob_get_contents();
                ob_end_clean();  
                   
                return $output;  
            }  
             
            throw new Exception('could not find template.'); 
        }    
    }