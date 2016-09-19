<?php

require_once "../private_html/bootstrap.php";

$where = "";
$total = array();
$i = 0;

foreach ($_POST as $k => $v){
	$where .= "$v, "; 
	$i++;
};

$wherefinal = substr($where, 0, strrpos($where, ", "));

$sql= "SELECT Species.Species_ID 
		FROM Species 
		JOIN ( 
			SELECT Species.Species_ID, COUNT(*) AS mynum 
			FROM Species_Opt LEFT JOIN Species ON (Species.Species_ID = Species_Opt.SO_Species_ID) 
			WHERE Species_Opt.SO_Option_ID IN ({$wherefinal})
			GROUP BY SO_Species_ID HAVING mynum = :number 
			) AS mytable ON Species.Species_ID = mytable.Species_ID";
$stmtTwo = $pdo->prepare($sql);
$stmtTwo -> bindParam(":number", $i);
$stmtTwo->execute();

//$smarty->assign("iter", $i);

$disp = "";
$q = array();

if ($stmtTwo->rowCount() == 0){
	$disp = "No match found in database";
	echo "$disp <br>";
}


While ($row = $stmtTwo->fetch(PDO::FETCH_ASSOC)){

	$h = $row['Species_ID'];

	$query = "SELECT Species.Common_Name
				FROM Species
				WHERE Species.Species_ID IN ({$h})";
	$stmtThree = $pdo->prepare($query);
	$stmtThree -> execute();
	
	While ($rowTwo = $stmtThree->fetch(PDO::FETCH_ASSOC)){
	
		$fname = $rowTwo['Common_Name'];
	
		$q = array(
			"Name" => $fname
		);
//		print_R ($q);


//	print_r ($rowTwo);
//	$q = $rowTwo['Common_Name'];
//	echo "$q <br>";
/*
	if ($h == 1){
		$disp = "Maple Agrocybe";
		echo "$disp <br>";
	} elseif ($h == 2){
		$disp = "Honey mushroom/Bootlace fungus";
		echo "$disp <br>";
	} elseif ($h == 3){
		$disp = "Ringless honey mushroom";
		echo "$disp <br>";
	} elseif ($h = 4){
		$disp = "Berkeley's polypore";
		echo "$disp <br>";
	} elseif ($h == 5){
		$disp = "Ling Chih";
		echo "$disp <br>";
	} elseif ($h == 6){
		$disp = "Spring polypore";
		echo "$disp <br>";
	} else {
		$disp = "You broke it";
		echo "$disp <br>";
	};
*/
	};
};
/*
$.ajax({url: "calc.php"}).done(function( html ) {
    $("#results").append(html);
});
*/

$smarty->assign("q", $q);
$smarty->display("GilledResultsPg.tpl");

?>