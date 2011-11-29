<?php
class photos extends model {

    public $page_length = 100;
    public $full_days = 1314001860;
    public $gates = 1314594000;
    public $burn = array('start' => 1314853200, 'end' => 1315285200);

    public function all($options) {
        $query = sprintf('SELECT * FROM photos %s', $this->getLimit($options));
        return $this->getFilenames($query);
    }

    public function consolodated($options) {
        $query = sprintf('SELECT * FROM photos WHERE timestamp >= %d %s', $this->full_days, $this->getLimit($options));
        return $this->getFilenames($query);
    }

    public function burnWeek($options) {
        $query = sprintf('SELECT * FROM photos WHERE timestamp >= %d AND timestamp <= %s %s', $this->burn['start'], $this->burn['end'], $this->getLimit($options));
        return $this->getFilenames($query);
    }

    public function sunrises($options) {
        $query = sprintf('SELECT * FROM photos WHERE hour >= 4 AND hour <= 5 AND timestamp >= %d %s', $this->full_days, $this->getLimit($options));
        return $this->getFilenames($query);
    }

    public function sunsets($options) {
        $query = sprintf('SELECT * FROM photos WHERE hour >= 18 AND hour <= 19 AND timestamp >= %d %s', $this->full_days, $this->getLimit($options));
        return $this->getFilenames($query);
    }

    private function getLimit($options) {
        if(!isset($options['page']) || $options['page'] < 1) $options['page'] = 1;
        $no_limit = $options['page'] === 'all';
        return ($no_limit) ? '' : sprintf('LIMIT %d, %d', $this->page_length * ($options['page'] - 1), $this->page_length);
    }

    private function getFilenames($query) {
        $result = mysql_query($query) or die(mysql_error());
        while($row = mysql_fetch_array($result)) {
            $return[] = $row;
        }
        return $return;
    }
}
?>