<?php include("header.php"); ?>

			    <?php 
	        	$prev = $_SESSION['count'];
	        	$_SESSION['count']++; 
	        	echo $_SESSION['count'];
				$count = $_SESSION['count'];
				
				
				$_SESSION['a'][$prev] = $_POST[$prev];
	        ?> 
	        
	       <div id="content">
		        <form action="final.php" method="post" name="ele3">
		            
		            <p>Hoe zou u deze persoon omschrijven?</p>
		            <img src="images/4.png" class="picture" />
		                <input type="checkbox" name="4" value="Integer" />Integer <br />
		                <input type="checkbox" name="4" value="Ongeduldig" />Ongeduldig <br />
		                <input type="checkbox" name="4" value="Agressief" />Agressief <br />
		                <input type="checkbox" name="4" value="Opdringerig" />Opdringerig <br />
		            <input type="submit" value="Volgende" id="submit" />           
		        </form>
	        
	        
			     
							  
							
			</div>
			
 <?php include("footer.php"); ?>