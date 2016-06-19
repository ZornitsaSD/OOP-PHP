<?php

	// Update form - see info for name & can edit, update 

// echo "<h1>".$title."</h1>";
	echo form_open('names/update_name_info');
	
		echo "<pre>";
		var_dump($names_item);
		echo "<pre>";
		$data = array(
				        'id'  => $names_item['id'],
				        'name' => $names_item['name'],
				        'meaning'   => $names_item['meaning'],
				        'gender'   => $names_item['gender']
					);
		echo form_hidden('my_array', $data);
		// $id = $names_item['id'];
	
		echo "Name";
			echo form_input('name', $data['name']);
		echo "<br>";
		echo "Meaning";
			echo form_input('meaning', $data['meaning']);
		echo "<br>";
		echo "Gender";
			echo form_input('gender', $data['gender']);
		echo "<br>";

		echo form_submit('submit', 'Edit');

	echo form_close();