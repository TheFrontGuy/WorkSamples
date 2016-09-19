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
$charName = $row['Char_Name'];
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

		} else {
			$firstTime = False;
		}
		$name = $row['Char_Name'];
		$cur = $row['Char_ID'];
		$optionarr = array();
		
	}
	$optionarr[$row['Op_ID']] = $row['Option_Name'];
	
}

if ($stmt->rowCount() !== 0){
	$characteristics[$cur] = array (
		"Name" => $name,
		"Option" => $optionarr
	);
}


$smarty->assign("characteristics", $characteristics);
$smarty->display("PoroidFungi.tpl");

//--------------------------------------------------------------------------------------------------------------------------------------------------
$where = "";
$total = array();
foreach ($_POST as $k => $v){
	$where .= "$v, "; 
	
};

$wherefinal = substr($where, 0, strrpos($where, ", "));

$sql= "SELECT Species.Species_ID 
		FROM Species 
		JOIN ( 
			SELECT Species.Species_ID, COUNT(*) AS mynum 
			FROM Species_Opt LEFT JOIN Species ON (Species.Species_ID = Species_Opt.SO_Species_ID) 
			WHERE Species_Opt.SO_Option_ID IN ({$wherefinal})
			GROUP BY SO_Species_ID HAVING mynum = 9 
			) AS mytable ON Species.Species_ID = mytable.Species_ID";
$stmtTwo = $pdo->prepare($sql);
$stmtTwo->execute();

$disp = "";

While ($row = $stmtTwo->fetch(PDO::FETCH_ASSOC)){ 
	$h = $row['Species_ID'];
	if ($h == 1){
		$disp = "Maple Agrocybe";
	} elseif ($h == 2){
		$disp = "Honey mushroom/Bootlace fungus";
	} elseif ($h == 3){
		$disp = "Ringless honey mushroom";
	} elseif ($h = 4){
		$disp = "Berkeley's polypore";
	} elseif ($h == 5){
		$disp = "Ling Chih";
	} elseif ($h == 6){
		$disp = "Spring polypore";
	} else{
		$disp = "Not in the database";
	}
};

echo "$disp";

/* DEBUG *
echo "the array <br>";
foreach ($characteristics as $key => $value){
	echo $key . '<br>';
	foreach ($value as $k=>$v){
		echo $k . $v . '<br>';
		foreach ($v as $a=>$b){
			echo $a . $b . '<br>';
	}}
}

// END DEBUG */


/* STORAGE

*/






?>