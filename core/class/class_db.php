<?php
class dbconn {
    var $conn = 0;
    function dbconn($dbhost,$dbuser,$dbpw,$dbname,$pconnect,$dbcharset){
        $this->conn = mysql_connect($dbhost,$dbuser,$dbpw);
        !$this->conn && $this->halt("Connect to MySQL failed");
        $serverinfo = mysql_get_server_info($this->conn);
        if ($serverinfo > '4.1' && $dbcharset) {
            mysql_query("SET character_set_connection=".$dbcharset.",character_set_results=".$dbcharset.",character_set_client=binary",$this->conn);
        }
        if ($serverinfo > '5.0') {
            mysql_query("SET sql_mode=''",$this->conn);
        }
        if ($dbname && !@mysql_select_db($dbname,$this->conn)) {
            $this->halt('Cannot use database');
        }
    }
    function select_db($dbname){
        if (!@mysql_select_db($dbname,$this->conn)) {
            $this->halt('Cannot use database');
        }
    }
    function server_info(){
        return mysql_get_server_info($this->conn);
    }
    function insert_id(){
        $arr = $this->fetch_array('SELECT LAST_INSERT_ID() as id');
        return $arr["id"];
    }
    function get_value($SQL,$offset=0,$field=0){
        $rt = $this->fetch_all($SQL);
        if (isset($rt[$offset][$field])) {
            return $rt[$offset][$field];
        }
        return false;
    }
 
    function query($SQL,$method = null,$error = true){
        $query = mysql_query($SQL,$this->conn);
        !$query && $error && $this->halt('Query Error: '.$SQL);
        return $query;
    }
    function fetch_array($SQL){
        $query = $this->query($SQL);
        return mysql_fetch_array($query);
    }
    function fetch_all($SQL) {
        $arr = array();
        $query = $this->query($SQL);
        while($data = mysql_fetch_array($query)) {
            $arr[] = $data;
        }
        return $arr;
    }
    function affected_rows(){
        return mysql_affected_rows($this->conn);
    }
    function num_rows($SQL){
        $query = $this->query($SQL);
        if (!is_bool($query)) {
            return mysql_num_rows($query);
        }
        return 0;
    }
    function num_fields($SQL){
        $query = $this->query($SQL);
        return mysql_num_fields($query);
    }
    function escape_string($str){
        return mysql_escape_string($str);
    }
    function free_result(){
        $void = func_get_args();
        foreach ($void as $query) {
            if (is_resource($query) && get_resource_type($query)==='mysql result') {
                mysql_free_result($query);
            }
        }
        unset($void);
    }
    function close(){
        $this->free_result();
        return @mysql_close($this->conn);
    }
    function halt($msg=null){
        exit($msg.'<br /><br />'.$sql.'<br /> '.mysql_error());
    }
}?>