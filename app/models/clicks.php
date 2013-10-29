<?php
class clicks extends model {
    public function initial($options) {
        error_log($options['photo']);
        $this->logClick($options['photo'], 1);
    }

    public function view($options) {
        $this->logClick($options['photo'], 2);
    }

    public function logClick($photo_id, $action) {
        $query = sprintf('INSERT INTO clicks (photo_id, action) VALUES (%d, %d)', $photo_id, $action);
        mysql_query($query) or die(mysql_error());
    }
}
?>