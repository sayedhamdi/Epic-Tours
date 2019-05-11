<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/circuit.php";
include "../core/circuitC.php";
if (isset($_GET['numC'])){
	$circuitC=new CircuitC();
    $result=$circuitC->recupererCircuit($_GET['numC']);
	foreach($result as $row){
		$themeCircuit=$row['themeCircuit'];
		$dureeCircuit=$row['dureeCircuit'];
		$descriptionCircuit=$row['descriptionCircuit'];
		$transportCircuit=$row['transportCircuit'];
?>
<form method="POST">
<table>
<caption>Modifier Circuit</caption>
<tr>
<td>themeCircuit</td>
<td><input type="text" name="themeCircuit" value="<?PHP echo $themeCircuit ?>"></td>
</tr>
<tr>
<td>dureeCircuit</td>
<td><input type="text" name="dureeCircuit" value="<?PHP echo $dureeCircuit ?>"></td>
</tr>
<tr>
<td>descriptionCircuit</td>
<td><input type="text" name="descriptionCircuit" value="<?PHP echo $descriptionCircuit ?>"></td>
</tr>
<tr>
<td>transportCircuit</td>
<td><input type="text" name="transportCircuit" value="<?PHP echo $transportCircuit ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$circuit=new circuit($_POST['themeCircuit'],$_POST['dureeCircuit'],$_POST['descriptionCircuit'],$_POST['transportCircuit']);
	$circuitC->modifierCircuit($circuit);
	header('Location: afficherCircuit.php');
}
?>
</body>
</HTMl>
