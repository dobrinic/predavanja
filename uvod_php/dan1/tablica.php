<?php 
require 'podatci/podatci.php';

// ovo je php komentar

/* ovo je 
višelinijski phpkomentar
*/
?>

<!DOCTYPE html>
<html>
	<table style="width:50%" border="1">
	  <tr>
		<th>Firstname</th>
		<th>Lastname</th> 
		<th>Age</th>
	  </tr>
	  <tr>
		<td><?php echo $ime ?></td>
		<td><?php echo $last_name ?></td> 
		<td><?php echo $godine ?></td>
	  </tr>
	</table>
</html>
<!-- komentar -->
