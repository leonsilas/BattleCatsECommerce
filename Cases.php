<style><?php>include_once 'phpTabledata.css' ?> </style>
<style><?php>include_once 'basestyle.css' ?> </style>

<?php
include_once 'conn.php';

$sql = "SELECT * FROM Cases;";
$result = sqlsrv_query($conn,$sql);

print '
<link rel="stylesheet" href="phpTabledata.css" type="text/css">
<div class ="div" >
<img src="whiteLogoalt.png" alt="BattleCat Logo" onclick="window.location="index.html";">
Get a Great Deal on these Cases
</div>';
	
	while($row = sqlsrv_fetch_array($result,2)){	
		print '<div class="ItemData"><br><h4 font-weight:bold>Item Number : ';
		print $row['ID'];
		print ' </h4><h4 font-weight:bold>Manufacturer : ';
		print $row['Manufacturer'];
		print '</h4><h4 font-weight:bold>Case Type : ';
		print $row['Case_Type'];
		print '</h4><h4 font-weight:bold>Side Panel : ';
		print $row['Side_Panel'];
		print '</h4><h4 font-weight:bold> HDD/SDD Bays : ';
		print $row['HDD_SDD_Bays'];
		print '</h4><h4 font-weight:bold> Price :  ' ;
	    print $row['Price'] = sprintf("$%.02f",$row['Price']);
		print '<h4 font-weight:bold > Quantity :  ' ;
		print $row['Quantity'];
		print '<br><br></div>';
		}
?>
