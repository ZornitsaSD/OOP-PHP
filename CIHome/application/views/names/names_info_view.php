<?php

	// Show info for one name choose by id from all names

echo "<ul>";
echo '<li>'.$names_item['id'].'</li>';
echo '<li>'.$names_item['name'].'</li>';
echo '<li>'.$names_item['meaning'].'</li>';
echo '<li>'.$names_item['gender'].'</li>';
echo '<li><a href="'. site_url('names/index').'">Go Back</a></li>';
echo "</ul>";