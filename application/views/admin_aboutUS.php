<!DOCTYPE html>
<html>
<head>
	<title>Admin_dashboard</title>
</head>
<body>
	<section class="about_us">
		<h3>About-US Section</h3>
		<div class="container" style="display:inline-block">
			<table border="1">  
				<tbody>  
					 <tr> 
							<td>Heading</td>
							<td>LOGO</td>
					 </tr>  
					 <?php  
					 if($aboutUS_query == 0){
							echo "no DATA available";
						 }else{
							foreach ($aboutUS_query as $row): 
							?>
							<tr>   
							<td><?php echo $row->heading;?></td>
							<td><?php echo $row->logo;?></td>	
							</tr>  
					 <?php endforeach;
						 }
					 ?>
				</tbody>  
			</table>
		</div>
	</section>
	
	<?php
		//form for updating home section;
		echo form_open('Admin_panel/update_aboutUS_component');

		$heading = array(
			'id'=>'heading',
			'name'=>'heading',
			'placeholder'=>'Write your text here.'
			);
		echo "<p>Heading: ";  
		echo form_input($heading);  
		echo "</p>";

		$logo = array(
			'id'=>'logo',
			'name'=>'logo',
			'placeholder'=>'Write only image address'
		);
		echo "<p>LOGO: ";  
		echo form_input($logo);  
		echo "</p>";
		
		echo form_submit('submit','Update');
		echo form_close();
	?>
</body>
</html>