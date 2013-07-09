<?php include("header.php"); ?>
	    <?php 
	        	$prev = $_SESSION['count'];
	        	$_SESSION['count']++; 
	        	echo $_SESSION['count'];
				$count = $_SESSION['count'];
				
				
				$_SESSION['a'][$prev] = $_POST[$prev];
	        ?> 
	
	        
	       <div id="content">
		        <form action="4.php" method="post" name="ele3">
		            
		            <p>Hoe zou u deze persoon omschrijven?</p>
		            <img src="images/3.png" class="picture" />
		                <input type="checkbox" name="3" value="Integer" />Integer <br />
		                <input type="checkbox" name="3" value="Ongeduldig" />Ongeduldig <br />
		                <input type="checkbox" name="3" value="Agressief" />Agressief <br />
		                <input type="checkbox" name="3" value="Opdringerig" />Opdringerig <br />
		            <input type="submit" value="Volgende" id="submit" />           
		        </form>
	        
	        
			     
							  
							
			</div>
			
 <?php include("footer.php"); ?>