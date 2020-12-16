<?php

require_once __DIR__ . '/../model/class.survey.php';

header('Content-type: text/html');

function select_survey_names(){
	$survey = new Survey();
	$surveys = $survey->select_survey_names();
	return $surveys;
}

function set_survey_name($survey_name){
	$survey = new Survey();
	$survey->set_survey_name($survey_name);
}

function validate_input(){
	$survey = new Survey();
	$survey->validate_input();
}

?>