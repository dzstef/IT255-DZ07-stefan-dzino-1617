<?php
	#servis vraca odgovarajuce vrste za prosledjeni parametar telefon
	#postojeci telefoni su: LG i HUAWEI
	
	header("Content-type: application/json");
	$telefon = $_POST['telefon'];	
	
	$niz_telefona = array(
		'telefon' => pronadji($telefon)
	);
	echo json_encode($niz_telefona);
	
	#metoda koja vraca postojece vrste za odgovarajuci telefon
	function pronadji($tl){		
		if($tl == "LG"){
			$niz_telefon_LG = array("V10", "Nexus 5X", "G4s", "Spirit");
			return $niz_telefon_LG;
		}
		elseif($tl == "HUAWEI"){
			$niz_telefon_huawei = array("P9", "Mate 8", "P9 Lite", "Nexus 6P");		
			return $niz_telefon_huawei;
		}
		else{
			return "Telefon nije pronadjen";
		}
	}

?>