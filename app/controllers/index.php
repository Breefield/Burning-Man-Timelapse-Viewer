<?php
require('inc/common.php');
require('helpers/photos.php');

class index extends controller {

    public $layout_top = array('layout/top', 'layout/header'); 
    public $layout_bottom = array('layout/footer', 'layout/bottom'); 
    public $vars;

    public function __layout($options) {
        $options['page'] = (isset($options['page'])) ? $options['page'] : 0;
        $this->vars['options'] = $options;
        $this->load('photos');
    }

    public function __index($options) {
        $this->show('index', $this->vars);
    }

    public function full($options) {
        $this->vars['photos'] = $this->photos->consolodated($options);
        $this->show('photos', $this->vars);
    }

    public function sunrises($options) {
        $this->vars['photos'] = $this->photos->sunrises($options);
        $this->show('photos', $this->vars);
    }

    public function sunsets($options) {
        $this->vars['photos'] = $this->photos->sunsets($options);
        $this->show('photos', $this->vars);
    }

    public function burn($options) {
        $this->vars['photos'] = $this->photos->burnWeek($options);
        $this->show('photos', $this->vars);
    }
}
?>