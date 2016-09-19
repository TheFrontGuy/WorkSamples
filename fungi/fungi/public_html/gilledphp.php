<?php

require_once "../private_html/bootstrap.php";

if (isset($_POST['5'])) {
	$chosenShape = 5;
	$actShape = "Gilled";
} elseif (isset($_POST['7'])) {
	$chosenShape = 7;
	$actShape = "Poroidal";
} else {
	$chosenShape = 'q';
	$actShape = "borked";
};

$query= "SELECT Characteristic.Name AS Char_Name, C_Option.Name AS Option_Name, Characteristic.Characteristic_ID AS Char_ID, C_Option.Option_ID AS Op_ID
		FROM Characteristic 
		JOIN C_Option ON Opt_Characteristic_ID = Characteristic_ID
		WHERE char_shape_category_ID = :shape";
$stmt = $pdo->prepare($query);
$stmt->bindParam(":shape", $chosenShape);
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
if ($stmt->rowCount() !== 0){
	$characteristics[$cur] = array (
		"Name" => $name,
		"Option" => $optionarr
	);
}

$smarty->assign("actShape", $actShape);
$smarty->assign("characteristics", $characteristics);
$smarty->display("GilledFungi.tpl");

//--------------------------------------------------------------------------------------------------------------------------------------------------




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

SELECT Species.Species_ID 
FROM Species 
JOIN ( 
	SELECT Species.Species_ID, COUNT(*) AS mynum 
	FROM Species_Opt LEFT JOIN Species ON (Species.Species_ID = Species_Opt.SO_Species_ID) 
	WHERE (Species_Opt.SO_Option_ID = 4)
    OR (Species_Opt.SO_Option_ID = 14)
    OR (Species_Opt.SO_Option_ID = 18)
    OR (Species_Opt.SO_Option_ID = 19)
    OR (Species_Opt.SO_Option_ID = 24)
    OR (Species_Opt.SO_Option_ID = 37)
    OR (Species_Opt.SO_Option_ID = 42)
	GROUP BY SO_Species_ID HAVING mynum = 6 
) AS mytable ON Species.Species_ID = mytable.Species_ID

// END DEBUG */


/* STORAGE

					
					

$radio = array();

if(isset($_POST['submit'])){
	if(isset($_POST['radio'])){
		$radio [] = array (
			$_POST['radio']
		)
	}
}

$radio = array();

if(isset($_POST[$cur])){
	$radio [] = array(
		$_POST($cur)
	)

}

$find = implode(" AND ", $radio);

$find = "SELECT * FROM tablename WHERE $find";





*/






?>