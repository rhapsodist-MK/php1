<?php

    class Application(){
        public function __construct(){
            $this->_set_reporting();
            $this->_unregister_globlas();
        }
        
        private function _set_reporting(){
            if(DEBUG){
                error_reporting(E_ALL); //set which php errors are reported //매개변수가 설정이 안되어 있을경우 그냥 return 시킴
                ini_set('display_errors', 1); //sets the value of a configuration option
                //the configuration option will keep this new value(2 param) during the script's execution, and will be restored at the script's ending.
            }else{
                error_reporting(0);
                ini_set('display_errors', 0);
                ini_set('log_errors', 1);
                ini_set('error_log', ROOT . DS . 'tmp' . DS . 'logs' . DS . 'errors.log');
            }
        }
        
        private function _unregister_globals(){
            if(ini_get('register_globals')){
                $globalsAry = ['_SESSION', '_COOKIE', '_POST', '_GET', '_REQUEST', '_SERVER', '_ENV', '_FILES'];
                foreach($globalsAry as $g){
                    foreach($GLOBALS[$g] as $k => $v){
                        if($GLOBALS[$k] === $v){
                            unset($GLOBALS[$k]);
                        }
                    }
                }
            }
        }
    }