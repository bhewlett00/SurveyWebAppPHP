<?php
class Survey{
	private $mysqli;

	function __construct() {
		$this->mysqli = new mysqli('localhost', 'root', '', 'Survey');
	}

	function __destruct(){
		$this->mysqli->close();
	}

	public function get_conn() {
        return $this->mysqli;
    }

    public function select_survey_names(){
    	$sql = "SELECT survey_name FROM surveys";
    	$retval = $this->mysqli->query($sql);
    	return $retval;
    }

    public function set_survey_name($survey_name){
    	$sql = "INSERT INTO surveys (survey_name) VALUES ('$survey_name')";
    	$this->mysqli->query($sql);
    }

}


?>