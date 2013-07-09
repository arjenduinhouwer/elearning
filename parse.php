<?php
session_start(); 

echo "Count is: " . $_SESSION['count'] . "<br />";

$count = $_SESSION['count'];

if ($_SESSION['count'] > 0 && $_SESSION['count'] < 11) {
 	$answer =  $_POST['answer'];
	$_SESSION["answer"][$count] = $answer;
	echo "you've answered " .$answer;
	
} else {
	$answer = "	";
}






$_SESSION['count']++;

switch($_SESSION['count']) {
	case 1: ?>
				<p>Hoe zou u deze persoon omschrijven?</p>
		            <img src="images/1.png" class="picture" />
		                <input type="checkbox" id="answer" name="1" value="Integer" />Integer <br />
		                <input type="checkbox" id="answer" name="1" value="Ongeduldig" />Ongeduldig <br />
		                <input type="checkbox" id="answer" name="1" value="Agressief" />Agressief <br />
		                <input type="checkbox" id="answer" name="1" value="Opdringerig" />Opdringerig <br />
		        <input type="submit" value="Volgende" id="submit" onclick="javascript:changeForm();"  />       
	        		
	
	<?php
	break;
	
	case 2: ?>
		<p>Hoe zou u deze persoon omschrijven?</p>
		            <img src='images/2.png' class='picture' />
		                <input type='checkbox' id="answer" name='2' value='Integer' />Integer <br />
		                <input type='checkbox' id="answer" name='2' value='Ongeduldig' />Ongeduldig <br />
		                <input type='checkbox' id="answer" name='2' value='Agressief' />Agressief <br />
		                <input type='checkbox' id="answer" name='2' value='Opdringerig' />Opdringerig <br />
		            <input type='submit' value='Volgende' id='submit' onclick="javascript:changeForm();" />   
		
<?php 		
	break;
	
	case 3:
		echo"this is three";
		echo "<pre>";
		print_r($_SESSION["answer"]);
		echo "</pre>";
		
		foreach ($_SESSION['answer'] as $key => $val) {
			if ($key == 0 ) continue;
			echo "<img width='100' src='images/". $key . ".png'/>". $val . "<br />";
			
		
		}
		break;
}

?>

 					        