<?php
$fileContents = file_get_contents('json_array.txt');
$decoded = json_decode($fileContents, true);
$jml = count($decoded);
?>
<html>
<style type="text/css">
table {
  border-collapse: collapse;
}

table, th, td {
  border: 1px solid black;
  text-align: center;
}
</style>
<h3 align="center">Daftar Pre Order Merchandise SGB Team Reg. Semarang</h3>
<table align="center">
<tr>
<td><b>&nbsp;No&nbsp;</b></td>
<td><b>&nbsp;Nama&nbsp;</b></td>
<td><b>&nbsp;WhatsApp&nbsp;</b></td>
<td><b>&nbsp;Model&nbsp;</b></td>
<td><b>&nbsp;Tipe&nbsp;</b></td>
<td><b>&nbsp;Size&nbsp;</b></td>
<td><b>&nbsp;Qty&nbsp;</b></td>
</tr>
<?php
for ($i=1; $i < $jml ; $i++) { 
	?>
	<tr>
	<td><?= $i ?></td>
	<td>&nbsp;<?= $decoded[$i]['nama'] ?>&nbsp;</td>
	<td>&nbsp;<?= $decoded[$i]['whatsapp'] ?>&nbsp;</td>
	<td>&nbsp;<?= $decoded[$i]['model'] ?>&nbsp;</td>
	<td>&nbsp;<?= $decoded[$i]['tipe'] ?>&nbsp;</td>
	<td>&nbsp;<?= $decoded[$i]['size'] ?>&nbsp;</td>
	<td>&nbsp;<?= $decoded[$i]['qty'] ?>&nbsp;</td>
	</tr>
	<?php
}
?>
</table>
</html>