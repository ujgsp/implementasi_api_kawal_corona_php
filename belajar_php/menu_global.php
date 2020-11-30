<?php  
$link_api = file_get_contents('https://api.kawalcorona.com/');
$data = json_decode($link_api, true);
?>

<!DOCTYPE html>
<html>
<head>
	<title>data global</title>
</head>
<body>
	<h1>Implementasi API kawal Corona</h1>
	<label>documentasi: <a href="https://kawalcorona.com/api/" target="_blank">https://kawalcorona.com/api/</a></label>
	<br>
	<a href="index.php">back</a>
	<br>
	<table border="1 solid #000000">
		<thead>
			<th>No</th>
			<th>Negara</th>
			<th>Jumlah Kasus Positif</th>
			<th>Jumlah Kasus Negati</th>
			<th>Jumlah Kasus Meninggal</th>
			<th>Jumlah Kasus Terkonfimasi</th>
			<!-- <th>Data Terakhir Update</th> -->
		</thead>
		<tbody>
			<?php  
			$no=1;
			foreach($data as $d)
			{
			?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $d['attributes']['Country_Region']; ?></td>
				<td><?php echo $d['attributes']['Active']; ?></td>
				<td><?php echo $d['attributes']['Recovered']; ?></td>
				<td><?php echo $d['attributes']['Deaths']; ?></td>
				<td><?php echo $d['attributes']['Confirmed']; ?></td>
				<!-- <td><?php echo $d['attributes']['Last_Update']; ?></td> -->
			</tr>
			<?php 
			$no++; 
			}
			?>
		</tbody>
	</table>
</body>
</html>