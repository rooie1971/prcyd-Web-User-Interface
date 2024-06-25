<?php

$pageid = 5;
include ("header.php");
echo "<div class='content'>
	<h2>Masternodes</h2>";

	if (isset($_POST['action'])) {
		echo "Masternode: ".$_POST['starten']." starten:";
		$result = $nmc->startmasternode("alias", "0", $_POST['starten']);
	        var_dump($result);
	}
	
	// $addressbook = file("addressbook.csv");
	?>
	<form method="post" name="masternode" action="masternodes.php">
		<input type="hidden" name="action" value="start" />
	<table class="table">
		<thead>
			<tr>
				<th>Alias</th>
				<th>Address</th>
				<th>Status</th>
 				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			
		<?php 
		$masternodelist = $nmc->listmasternodeconf();
		
			foreach ($masternodelist as $line)
			{
				// $values = explode(";", $line);
				$alias = $line["alias"];
				$address = $line["address"];
			 	$status = $line["status"];
				echo "<tr>";
				echo "<td>".$alias."</td>";
				echo "<td>".$address."</td>";
				echo "<td>".$status."</td>";
				echo "<td>Start&nbsp;&nbsp;<input class='btn btn-primary' name='starten' type='submit' value='".$alias."'></td>\n";
				echo "</tr>";
				
			}


		?>
		</tbody>
	</table>
	</form>
<?php 
echo "</div>";
include ("footer.php");
?>
