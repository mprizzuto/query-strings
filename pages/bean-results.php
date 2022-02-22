<h1>your bean rsults</h1>

<?php 
	if (in_array("", $_POST)) {
		$userMessage = "no empty values allowed";
		echo <<<HEREDOC
		<h2><mark>$userMessage</h2>
		<p><em>click the back button and try again</em></p>
		HEREDOC;
	}

	else {
		foreach ($_POST as $key => $value) {
			echo <<<HEREDOC
			 <strong>{$key}</strong> {$value}<br>
			HEREDOC;
		}
	}
?>

