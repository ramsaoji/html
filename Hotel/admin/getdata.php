<?php

$val = $_GET['selectvalue'];

$s1 = array('','101','102','103','104','105','106','107','108','110');
$d1 = array('','201','202','203','204','501-AC','502-AC');
$t1 = array('','301','302','303');
$q1 = array('','401');

switch ($val) {
	case 'Single': foreach ($s1 as $s1val) {
		echo "<option> $s1val </option>";
	}
	break;

	case 'Double': foreach ($d1 as $d1val) {
		echo "<option> $d1val </option>";
	}
	break;

	case 'Triple': foreach ($t1 as $t1val) {
		echo "<option> $t1val </option>";
	}
	break;

	case 'Quad': foreach ($q1 as $q1val) {
		echo "<option> $q1val </option>";
	}
	break;
	
	default: echo "No Room is selected.";
	break;
}


?>