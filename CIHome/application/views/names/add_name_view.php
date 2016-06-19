<?php
	// form to add new name in DB
	echo "<h1>".$title."</h1>";
	echo form_open('names/create_name');

		
		echo "Name";
			echo form_input('name');
		echo "<br>";
		echo "Meaning";
			echo form_input('meaning');
		echo "<br>";
		echo "Gender";
			echo form_input('gender');
		echo "<br>";

		echo form_submit('submit', 'Save');

	echo form_close();