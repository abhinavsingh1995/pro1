<!DOCTYPE html>
<html>
<head>
	<title>Admin_dashboard</title>
</head>
<body>
	<h1>Welcome</h1>
	<h3>Home Section</h3>
	<div class="container" style="display:inline-block">
	<table border="1">  
		<tbody>  
			 <tr> 
					<td>Main-Header</td>
					<td>Sub-Header</td>
					<td>bg-image</td>
			 </tr>  
			 <?php  
			 if($query == 0){
					echo "no DATA available";
				 }else{
					foreach ($query as $row): 
					?>
					<tr>  
					<td><?php echo $row->header_h1;?></td>  
					<td><?php echo $row->header_h5;?></td>
					<td><?php echo $row->bg_image;?></td>	
					</tr>  
			 <?php endforeach;
				 }
			 ?>
		</tbody>  
	</table>
	</div>

	<?php
		//form for updating home section;
		echo form_open('Admin_panel/update_page_component');

		$main_header = array(
			'id'=>'main_header',
			'name'=>'main_header',
			'placeholder'=>'Write your text here'
			);
		echo "<p>Main-Header: ";  
		echo form_input($main_header);
		echo "</p>";

		$sub_header = array(
			'id'=>'sub_header',
			'name'=>'sub_header',
			'placeholder'=>'Write your text here.'
			);
		echo "<p>Sub-Header: ";  
		echo form_input($sub_header);  
		echo "</p>";

		$bg_image = array(
			'id'=>'bg_image',
			'name'=>'bg_image',
			'placeholder'=>'Write only image address'
		);
		echo "<p>BG-Image: ";  
		echo form_input($bg_image);  
		echo "</p>";
		
		echo form_submit('submit','Update');
		echo form_close();
	?>
</body>
</html>