<?php
class SQL {
    public $query = 'SELECT password AS username FROM users WHERE id=1';
    public $conn;
    public function __construct() {
    }
    
    public function connect() {
        $this->conn = new SQLite3 ("database.db", SQLITE3_OPEN_READONLY);
    }

    public function SQL_query($query) {
        $this->query = $query;
    }

    public function execute() {
        return $this->conn->query ($this->query);
    }

    public function __destruct() {
        if (!isset ($this->conn)) {
            $this->connect();
        }
        
        $ret = $this->execute();
        if (false !== $ret) {    
            while (false !== ($row = $ret->fetchArray (SQLITE3_ASSOC))) {
                echo '<p class="well"><strong>var_dump:<strong> ' . var_dump($row) . '</p>';
            }
        }
    }
}

$array = array(
    "ip" => "73.153.20.139", 
    "inj" => new SQL,
);

var_dump($array);
$encoded= base64_encode(serialize($array));
echo $encoded;
?>
