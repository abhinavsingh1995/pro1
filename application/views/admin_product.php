<!DOCTYPE html>
<html>
<head>
	<title>Admin_dashboard</title>
</head>
<body>
	<section class="about_us">
		<h3>Product Section</h3>
		<div class="container" style="display:inline-block">
			<table border="1">  
				<tbody>  
					 <tr> 
							<td>Product-Heading</td>
							<td>P1-name</td>
							<td>P1-detail</td>
							<td>P2-name</td>
							<td>P2-detail</td>
							<td>P3-name</td>
							<td>P3-detail</td>
							<td>P4-name</td>
							<td>P4-detail</td>
					 </tr>  
					 <?php  
					 if($product_query == 0){
							echo "no DATA available";
						 }else{
							foreach ($product_query as $row): 
							?>
							<tr>   
							<td><?php echo $row->p_heading;?></td>
							<td><?php echo $row->	product1_name;?></td>
							<td><?php echo $row->	product1_detail;?></td>
							<td><?php echo $row->	product2_name;?></td>
							<td><?php echo $row->	product2_detail;?></td>
							<td><?php echo $row->	product3_name;?></td>
							<td><?php echo $row->	product3_detail;?></td>
							<td><?php echo $row->	product4_name;?></td>
							<td><?php echo $row->	product4_detail;?></td>
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
		echo form_open('Admin_panel/update_product_component');

		$heading = array(
			'id'=>'heading',
			'name'=>'heading',
			'placeholder'=>'Write your text here.'
			);
		echo "<p>Heading: ";  
		echo form_input($heading);  
		echo "</p>";

		$p1_name = array(
			'id'=>'p1_name',
			'name'=>'p1_name',
			'placeholder'=>'Write only image address'
		);
		echo "<p>p1_name: ";  
		echo form_input($p1_name);  
		echo "</p>";
		
		$p1_detail = array(
			'id'=>'p1_detail',
			'name'=>'p1_detail',
			'placeholder'=>'Write only image address'
		);
		echo "<p>p1_detail: ";  
		echo form_input($p1_detail);  
		echo "</p>";
		
		$p2_name = array(
			'id'=>'p2_name',
			'name'=>'p2_name',
			'placeholder'=>'Write only image address'
		);
		echo "<p>p2_name: ";  
		echo form_input($p2_name);  
		echo "</p>";
		
		$p2_detail = array(
			'id'=>'p2_detail',
			'name'=>'p2_detail',
			'placeholder'=>'Write only image address'
		);
		echo "<p>p2_detail: ";  
		echo form_input($p2_detail);  
		echo "</p>";
		
		$p3_name = array(
			'id'=>'p3_name',
			'name'=>'p3_name',
			'placeholder'=>'Write only image address'
		);
		echo "<p>p3_name: ";  
		echo form_input($p3_name);  
		echo "</p>";
		
		$p3_detail = array(
			'id'=>'p3_detail',
			'name'=>'p3_detail',
			'placeholder'=>'Write only image address'
		);
		echo "<p>p3_detail: ";  
		echo form_input($p3_detail);  
		echo "</p>";
		
		$p4_name = array(
			'id'=>'p4_name',
			'name'=>'p4_name',
			'placeholder'=>'Write only image address'
		);
		echo "<p>p4_name: ";  
		echo form_input($p4_name);  
		echo "</p>";
		
		$p4_detail = array(
			'id'=>'p4_detail',
			'name'=>'p4_detail',
			'placeholder'=>'Write only image address'
		);
		echo "<p>p4_detail: ";
		echo form_input($p4_detail);  
		echo "</p>";
		
		echo form_submit('submit','Update');
		echo form_close();
	?>
</body>
</html>