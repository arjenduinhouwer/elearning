<?php include("header.php"); ?>

		<?php 
	        	$prev = $_SESSION['count'];
	        	
	        	
				
				
				
				$_SESSION['a'][$prev] = $_POST[$prev];
	    ?> 
	        
	       <div id="content">
		        
	        	<h2>U heeft deze scores opgegeven... </h2>
	        	
	        	<?php print_r($_SESSION['a']); ?>
	        	
	        	<?php foreach ($_SESSION['a'] as $key => $val) {
	        		echo $key . " - " . $val . "<br />";
	        	}
	        	?>
			       
							  
							
			</div>
			
 <?php include("footer.php"); ?>