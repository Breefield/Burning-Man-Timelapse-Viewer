<?php
require('inc/common.php');

class index extends controller {

    public $layout_top = array('layout/top', 'layout/header'); 
    public $layout_bottom = array('layout/footer', 'layout/bottom'); 
    public $vars;

    public function __index($options) {
        require('helpers/photos.php');
        $this->vars['options'] = $options;
        $this->load('photos');
        //$this->vars['photos'] = $this->photos->all(0, false);
        //$this->vars['photos'] = $this->photos->consolodated();
        $this->vars['photos'] = $this->photos->sunrises($options);
        $this->show('index', $this->vars);
    }
}
?>