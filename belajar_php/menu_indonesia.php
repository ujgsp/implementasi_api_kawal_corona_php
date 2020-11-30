<?php  
$link_api = file_get_contents('https://api.kawalcorona.com/indonesia');
$data = json_decode($link_api, true);
?>

<!DOCTYPE html>
<html>
<head>
	<title>data indonesia</title>
</head>
<body>
	<h1>Implementasi API kawal Corona</h1>
	<label>documentasi: <a href="https://kawalcorona.com/api/" target="_blank">https://kawalcorona.com/api/</a></label>
	<br>
	<a href="index.php">back</a>
	<br>
	<table border="1 solid #000000">
		<thead>
			<th>Jumlah Kasus Positif</th>
			<th>Jumlah Kasus Negati</th>
			<th>Jumlah Kasus Meninggal</th>
		</thead>
		<tbody>
			<?php  
			// $no=1;
			foreach($data as $d)
			{
			?>
			<tr>
				<td><?php echo $d['positif']; ?></td>
				<td><?php echo $d['sembuh']; ?></td>
				<td><?php echo $d['meninggal']; ?></td>
			</tr>
			<?php 
			// $no++; 
			}
			?>
		</tbody>
	</table>
</body>
</html>