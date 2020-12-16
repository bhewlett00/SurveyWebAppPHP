<!DOCTYPE html>
<html lang="en">
    <head>	
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    	<title>View Surveys</title>
        <!-- <link rel="stylesheet" href="assets/css/styles.css"> -->
    </head>
    <body>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    	<h1> View Surveys </h1>
    	<table class= 'table table-striped'>
    		<thead>
    			<tr>
    				<th scope='=col'>Name</th>
    			</tr>
    		</thead>
    		<tbody>
    			<?php
                    if(isset($_POST['survey_name'])){
					   require_once './controller/survey.php';
					   $survey = $_POST['survey_name'];
					   set_survey_name($survey);
                    }

                    require_once './controller/survey.php';
					foreach (select_survey_names() as $surveys) {
                        foreach ($surveys as $survey) {
    						echo "<tr>";
    							echo "<td>";
    								echo $survey;
    							echo "</td>";
    						echo "</tr>";
                        }
					}
                
    			?>
    		</tbody>
        </table>
        <a class='btn btn-primary' href='./surveys_new.php' role='button'>Create Survey</a>
    </body>
</html>