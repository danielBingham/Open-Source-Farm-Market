<?php

class Application_Model_Query_FarmImage extends Application_Model_Query_Abstract {
    protected $_model='FarmImage';
    protected static $_instance;

    public static function getInstance() {
        return parent::getInstanceForModel('FarmImage');
    }



}

?>
