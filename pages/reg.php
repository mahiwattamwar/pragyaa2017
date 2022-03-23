<?php

	
	mysql_connect("localhost", "pragyo67_p2017", "p2017", "pragyo67_pragyaa2017");
	mysql_select_db("pragyo67_pragyaa2017");
	
	
$lol_all="SELECT * FROM registration";
	$result=mysql_query($lol_all) or die(mysql_error());	
$c=0;
?>


<!DOCTYPE html>
<html>
<head>
	<title>Pragyaa 2017 | Registrations</title>
	<style type="text/css">
		.tabl{
			width: 90%;
			border: 2px solid grey;
		}


	</style>
</head>
<body>

<table class="tabl" align="center">
	<tr class="tabl_tr">
		<th>Index</th>
		<th>Name</th>
		<th>Email</th>
		<th>College</th>
		<th>City</th>
		<th>Contact</th>
		<th>Accomodation</th>
		<th>id</th>
	</tr>
	
	
	<?php

               If(mysql_num_rows($result)>0)
               {
                 while($row=mysql_fetch_array($result))
                 {  
                 $c++;

            ?>
             <tr>
              <td><?php echo $row['new']; ?></td> 
              <td><?php echo $row['name']; ?></td> 
              <td><?php echo $row['email']; ?></td>
              <td><?php echo $row['college']; ?></td>
              <td><?php echo $row['city']; ?></td>
              <td><?php echo $row['mobile']; ?></td>
              <td style="text-align:center;"><?php echo $row['accomodation']; ?></td>
              <td><?php echo $row['id']; ?></td> 
            </tr>
            <?php

            }
            }
             ?>
	
<h4>Total online reg count= <?php echo $c ; ?></h4>
	
</table>


</body>
</html>