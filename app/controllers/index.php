<?php
require('inc/common.php');

class index extends controller {

    public $layout_top = array('layout/top', 'layout/header'); 
    public $layout_bottom = array('layout/footer', 'layout/bottom'); 
    public $vars;

    public function __index($options) {
        $options['page'] = (isset($options['page'])) ? $options['page'] : 0;
        require('helpers/photos.php');
        $this->vars['options'] = $options;
        $this->load('photos');
        //$this->vars['photos'] = $this->photos->all($options);
        $this->vars['photos'] = $this->photos->consolodated($options);
        //$this->vars['photos'] = $this->photos->sunrises($options);
        $this->show('index', $this->vars);
    }

    public function sunrises($options) {
        $options['page'] = (isset($options['page'])) ? $options['page'] : 1;
        require('helpers/photos.php');
        $this->vars['options'] = $options;
        $this->load('photos');
        $this->vars['photos'] = $this->photos->sunrises($options);
        $this->show('sunrises', $this->vars);
    }
}
?>