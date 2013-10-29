<?php
require('inc/common.php');
require('helpers/photos.php');

class handle_clicks extends controller {
    
    public function __layout($options) {
        $this->vars['options'] = $options;
        $this->load('clicks');
    }

    public function initial($options) {
        $this->clicks->initial($options);
    }

    public function view($options) {
        $this->clicks->view($options);
    }
}
?>