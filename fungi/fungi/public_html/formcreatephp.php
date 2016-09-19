<?php

require_once "../private_html/bootstrap.php";

$query= "SELECT Characteristic.Name AS Char_Name, C_Option.Name AS Option_Name, Characteristic.Characteristic_ID AS Char_ID, C_Option.Option_ID AS Op_ID
		FROM Characteristic 
		JOIN C_Option ON Opt_Characteristic_ID = Characteristic_ID
		WHERE char_shape_category_ID = :shape";
$stmt = $pdo->prepare($query);
$stmt->bindParam(":shape", $_GET["chosenShape"]);
$stmt->execute();

$current="";
$firstTime = True;
$cur = 0;
$characteristics = array();

/*
$charname = $row['Char_Name'];
$charid = $row['Char_ID'];
$opname = $row['Op_Name'];
$opid = $row['Op_ID'];
*/

While ($row = $stmt->fetch(PDO::FETCH_ASSOC)){ 
	if($cur != $row['Char_ID']){
		if(!$firstTime){
			$characteristics[$cur] = array (
				"Name" => $name,
				"Option" => $optionarr
			);
//		print_r ($optionarr);
//		print_r ($characteristics);
		} else {
			$firstTime = False;
		}
		$name = $row['Char_Name'];
		$cur = $row['Char_ID'];
		$optionarr = array();
		
	}
	$optionarr[$row['Op_ID']] = $row['Option_Name'];
	
}
/*
While ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
	if($cur != $row['Char_ID']){
		if(!$firstTime){
			$characteristics[] = array(
				$cur => array(
					"Name" => $row['Char_Name'],
					"Options" => $row['Option_Name']
				)
			);
		} else {
			$firstTime = False;
		//first time
		}
		//reset
		$cur = $row['Char_ID'];
		$name = $row['Char_Name'];
		$temp = array();
	}
	$temp[$row['Op_ID']] = $row['Option_Name'];
	$characteristics[] = array(
		$cur => array(
			"Name" => $row['Char_Name'],
			"Options" => $row['Option_Name']
		)
	);
}
*/
//$smarty -> assign("Op_ID", $row['Op_ID']);
//$smarty -> assign("Char_ID", $row['Char_ID']);
//$smarty -> assign("Option_Name", $row['Option_Name']);
//$smarty -> assign("Char_Name", $row['Char_Name']);
//$smarty -> assign("cur", $cur);
$smarty->assign("optionarr", $optionarr);
$smarty->assign("characteristics", $characteristics);
$smarty->display("GilledFungi.tpl");

/* DEBUG *
echo "the array <br>";
foreach ($characteristics as $key => $value){
	echo $key . '<br>';
	foreach ($value as $k=>$v){
		echo $k . $v . '<br>';
	}
		foreach ($value as $a=>$b){
			echo $a . $b . '<br>';
	}
}

// END DEBUG */


/* STORAGE

					
						{foreach $opt as $k =>$v}
							<label>
								<input type="radio" value="$acur">
									{$v}
							</label>
						{/foreach}
					{/foreach}





*/






?>