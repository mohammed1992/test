<html>
<head>	
	<meta charset="UTF-8" />
	<title>Welcome to CodeIgniter</title>
</head>
<body>
	<CENTER>
	<table border="1">
		<tr>
			<th> Name </th>
			<th> City </th>
		</tr>
		<?php
			foreach ($uList as $row) {
			echo '<tr>
					<td>'.$row->name.'</td>
					<td>'.$row->city.'</td>
				  </tr>';			
		}
		?>	
	</table>
	</CENTER>
</body>
</html>