<?php

	echo form_open('');
	
	$Main_header=array(
		'id'=>'main_header',
		'name'=>'main_header',
		'placeholder'=>'Write your text here',
		);
	echo "<p>Main-Header: ";  
	echo form_input($Main_header);  
	echo "</p>";
	
	$Sub_Header =array(
		'id'=>'sub_header',
		'name'=>'sub_header',
		'placeholder'=>'Write your text here.',
		);
	echo "<p>Sub-Header: ";  
	echo form_input($heading_h1);  
	echo "</p>";

	echo form_submit('submit','Update');
	echo form_close();
	
?>