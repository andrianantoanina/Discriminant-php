<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<head>
	<title>Résolution de polynômes du second degré (ax² + bx + c)</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" type="text/css" media="screen" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<form method="post" action="delta.php" enctype="multipart/form-data">
	<table style="width:350px; font-family:verdana; font-size:11px; border:1px dashed;">
		<tr>
			<td>Renseignez les données ci-dessous<br /><br /></td>
		</tr>
		<tr>
			<td>&nbsp;&nbsp;<b>a</b>x²</td>
			<td style="width:65%"><b>a = </b><input type="text" value="" name="a_value"><br/></td>
		</tr>
		<tr>
			<td>&nbsp;&nbsp;<b>b</b>x</td>
			<td style="width:65%"><b>b = </b><input type="text" value="" name="b_value"><br /></td>
		</tr>
		<tr>
			<td>&nbsp;&nbsp;<b>c</b></td>
			<td style="width:65%"><b>c = </b><input type="text" value="" name="c_value"><br /></td>
		</tr>
		<tr>
			<td><input type="submit" value="Calculer !"></td>
		</tr>
	</table>
</form>

<?php

if (isset($_POST['a_value']) || isset($_POST['b_value']) || isset($_POST['c_value'])) {
	$a_value = htmlentities($_POST['a_value']);
	$b_value = htmlentities($_POST['b_value']);
	$c_value = htmlentities($_POST['c_value']);

	$delta = ($b_value*$b_value)-4*$a_value*$c_value;
	
	if ($delta<0) {
		echo '<p style="font-family:verdana; color:red; font-size:12px;">Delta inférieur à zéro, <b>calcul impossible</b></p>';
	} elseif ($delta>0) {
		?>

<table style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; width:400px; border:1px solid;">
	<tr>
		<td>a = <?php echo $a_value; ?> || b = <?php echo $b_value; ?> || c = <?php echo $c_value; ?> || <b>Delta = <?php echo $delta; ?></b><br /></td>
	</tr>
	<tr>
		<td>Il y a deux <b>solutions différentes</b><br /><br /></td>
	</tr>
	<tr>
		<td>&nbsp;&nbsp; x = </td>
		<td> - <?php echo $b_value; ?> - RAC_<?php echo $delta; ?><br />-----------------------------<br />   2*<?php echo $a_value; ?><br /><br /></td>
	</tr>
	<tr>
		<td>&nbsp;&nbsp;<b> x1 = <?php $sol_1 = (-$b_value-sqrt($delta))/(2*$a_value); echo $sol_1; ?></b><br /><br /></td>
	</tr>
	<tr>
		<td>&nbsp;&nbsp; x = </td>
		<td> - <?php echo $b_value; ?> + RAC_<?php echo $delta; ?><br />-----------------------------<br />   2*<?php echo $a_value; ?><br /><br /></td>
	</tr>
	<tr>
		<td>&nbsp;&nbsp;<b> x2 = <?php $sol_2 = (-$b_value+sqrt($delta))/(2*$a_value); echo $sol_2; ?></b><br /><br /></td>
	</tr>
</table>

<?php
	} elseif ($delta==0) {
?>

<table style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; width:400px; border:1px solid;">
	<tr>
		<td>a = <?php echo $a_value; ?> || b = <?php echo $b_value; ?> || c = <?php echo $c_value; ?> || <b>Delta = <?php echo $delta; ?></b><br /></td>
	</tr>
	<tr>
		<td>Il y a une <b>solution unique</b><br /><br /></td>
	</tr>
	<tr>
		<td>&nbsp;&nbsp; x = </td>
		<td> - <?php echo $b_value; ?> - RAC_<?php echo $delta; ?><br />-----------------------------<br />   2*<?php echo $a_value; ?><br /><br /></td>
	</tr>
	<tr>
		<td>&nbsp;&nbsp;<b> x = <?php $sol_unique = (-$b_value-sqrt($delta))/(2*$a_value); echo $sol_unique; ?></b><br /><br /></td>
	</tr>
</table>

<?php
	}
}
	
?>

</body>
</html>
