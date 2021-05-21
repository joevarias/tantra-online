<?php

	require_once 'connect.php';
	$optionbygod = mysqli_real_escape_string($conn, $_POST['optionbygod']);
	$optionbytribe = mysqli_real_escape_string($conn, $_POST['optionbytribe']);


	// SELECT with ranking COMPLETE All god All tribes - Order ranking by MP
	if ($optionbygod == "all" && $optionbytribe == "all") {

		$sql = "SELECT charname, god_name, god_icon_path, ashram_name, tribe_icon_path, tribe_name, masterpoint, caste_name, rank() OVER (ORDER BY masterpoint DESC) AS 'result_ranking' FROM tbl_characters c
		JOIN tbl_gods g ON c.god_id = g.id
		JOIN tbl_ashrams a ON c.ashram_id = a.id
		JOIN tbl_charstats cs ON c.charstats_id = cs.id
		JOIN tbl_tribes t ON c.tribe_id = t.id
		JOIN tbl_castesystem csm ON cs.caste_id = csm.id";

	}

	// SELECT with ranking - Display only brahma - Order ranking by MP
	if($optionbygod == "brahma" && $optionbytribe == "all"){
		$sql = "SELECT charname, god_name, god_icon_path, ashram_name, tribe_icon_path, tribe_name, masterpoint, caste_name, rank() OVER (ORDER BY masterpoint DESC) AS 'result_ranking' FROM tbl_characters c
		JOIN tbl_gods g ON c.god_id = g.id
		JOIN tbl_ashrams a ON c.ashram_id = a.id
		JOIN tbl_charstats cs ON c.charstats_id = cs.id
		JOIN tbl_tribes t ON c.tribe_id = t.id
		JOIN tbl_castesystem csm ON cs.caste_id = csm.id WHERE c.god_id = 1";
	}
	
	// SELECT with ranking - Display only shiva - Order ranking by MP
	elseif($optionbygod == "shiva" && $optionbytribe == "all"){
		$sql = "SELECT charname, god_name, god_icon_path, ashram_name, tribe_icon_path, tribe_name, masterpoint, caste_name, rank() OVER (ORDER BY masterpoint DESC) AS 'result_ranking' FROM tbl_characters c
		JOIN tbl_gods g ON c.god_id = g.id
		JOIN tbl_ashrams a ON c.ashram_id = a.id
		JOIN tbl_charstats cs ON c.charstats_id = cs.id
		JOIN tbl_tribes t ON c.tribe_id = t.id
		JOIN tbl_castesystem csm ON cs.caste_id = csm.id WHERE c.god_id = 2";
	}
	// SELECT with ranking - Display only vishnu - Order ranking by MP
	elseif($optionbygod == "vishnu" && $optionbytribe == "all"){
		$sql = "SELECT charname, god_name, god_icon_path, ashram_name, tribe_icon_path, tribe_name, masterpoint, caste_name, rank() OVER (ORDER BY masterpoint DESC) AS 'result_ranking' FROM tbl_characters c
		JOIN tbl_gods g ON c.god_id = g.id
		JOIN tbl_ashrams a ON c.ashram_id = a.id
		JOIN tbl_charstats cs ON c.charstats_id = cs.id
		JOIN tbl_tribes t ON c.tribe_id = t.id
		JOIN tbl_castesystem csm ON cs.caste_id = csm.id WHERE c.god_id = 3";
	}

	// SELECT with ranking - All gods, Display only Naga tribe - Order ranking by MP
	elseif($optionbygod == "all" && $optionbytribe == "naga"){
		$sql = "SELECT charname, god_name, god_icon_path, ashram_name, tribe_icon_path, tribe_name, masterpoint, caste_name, rank() OVER (ORDER BY masterpoint DESC) AS 'result_ranking' FROM tbl_characters c
		JOIN tbl_gods g ON c.god_id = g.id
		JOIN tbl_ashrams a ON c.ashram_id = a.id
		JOIN tbl_charstats cs ON c.charstats_id = cs.id
		JOIN tbl_tribes t ON c.tribe_id = t.id
		JOIN tbl_castesystem csm ON cs.caste_id = csm.id WHERE c.tribe_id = 1";
	}

	// SELECT with ranking - All gods, Display only Kimnara tribe - Order ranking by MP
	elseif($optionbygod == "all" && $optionbytribe == "kimnara"){
		$sql = "SELECT charname, god_name, god_icon_path, ashram_name, tribe_icon_path, tribe_name, masterpoint, caste_name, rank() OVER (ORDER BY masterpoint DESC) AS 'result_ranking' FROM tbl_characters c
		JOIN tbl_gods g ON c.god_id = g.id
		JOIN tbl_ashrams a ON c.ashram_id = a.id
		JOIN tbl_charstats cs ON c.charstats_id = cs.id
		JOIN tbl_tribes t ON c.tribe_id = t.id
		JOIN tbl_castesystem csm ON cs.caste_id = csm.id WHERE c.tribe_id = 2";
	}

	// SELECT with ranking - All gods, Display only Asura tribe - Order ranking by MP
	elseif($optionbygod == "all" && $optionbytribe == "asura"){
		$sql = "SELECT charname, god_name, god_icon_path, ashram_name, tribe_icon_path, tribe_name, masterpoint, caste_name, rank() OVER (ORDER BY masterpoint DESC) AS 'result_ranking' FROM tbl_characters c
		JOIN tbl_gods g ON c.god_id = g.id
		JOIN tbl_ashrams a ON c.ashram_id = a.id
		JOIN tbl_charstats cs ON c.charstats_id = cs.id
		JOIN tbl_tribes t ON c.tribe_id = t.id
		JOIN tbl_castesystem csm ON cs.caste_id = csm.id WHERE c.tribe_id = 3";
	}

	// SELECT with ranking - All gods, Display only Rakshasa tribe - Order ranking by MP
	elseif($optionbygod == "all" && $optionbytribe == "rakshasa"){
		$sql = "SELECT charname, god_name, god_icon_path, ashram_name, tribe_icon_path, tribe_name, masterpoint, caste_name, rank() OVER (ORDER BY masterpoint DESC) AS 'result_ranking' FROM tbl_characters c
		JOIN tbl_gods g ON c.god_id = g.id
		JOIN tbl_ashrams a ON c.ashram_id = a.id
		JOIN tbl_charstats cs ON c.charstats_id = cs.id
		JOIN tbl_tribes t ON c.tribe_id = t.id
		JOIN tbl_castesystem csm ON cs.caste_id = csm.id WHERE c.tribe_id = 4";
	}

	// SELECT with ranking - All gods, Display only Yaksa tribe - Order ranking by MP
	elseif($optionbygod == "all" && $optionbytribe == "yaksa"){
		$sql = "SELECT charname, god_name, god_icon_path, ashram_name, tribe_icon_path, tribe_name, masterpoint, caste_name, rank() OVER (ORDER BY masterpoint DESC) AS 'result_ranking' FROM tbl_characters c
		JOIN tbl_gods g ON c.god_id = g.id
		JOIN tbl_ashrams a ON c.ashram_id = a.id
		JOIN tbl_charstats cs ON c.charstats_id = cs.id
		JOIN tbl_tribes t ON c.tribe_id = t.id
		JOIN tbl_castesystem csm ON cs.caste_id = csm.id WHERE c.tribe_id = 5";
	}

	// SELECT with ranking - All gods, Display only Gandharva tribe - Order ranking by MP
	elseif($optionbygod == "all" && $optionbytribe == "gandharva"){
		$sql = "SELECT charname, god_name, god_icon_path, ashram_name, tribe_icon_path, tribe_name, masterpoint, caste_name, rank() OVER (ORDER BY masterpoint DESC) AS 'result_ranking' FROM tbl_characters c
		JOIN tbl_gods g ON c.god_id = g.id
		JOIN tbl_ashrams a ON c.ashram_id = a.id
		JOIN tbl_charstats cs ON c.charstats_id = cs.id
		JOIN tbl_tribes t ON c.tribe_id = t.id
		JOIN tbl_castesystem csm ON cs.caste_id = csm.id WHERE c.tribe_id = 6";
	}

	// SELECT with ranking - All gods, Display only Deva tribe - Order ranking by MP
	elseif($optionbygod == "all" && $optionbytribe == "deva"){
		$sql = "SELECT charname, god_name, god_icon_path, ashram_name, tribe_icon_path, tribe_name, masterpoint, caste_name, rank() OVER (ORDER BY masterpoint DESC) AS 'result_ranking' FROM tbl_characters c
		JOIN tbl_gods g ON c.god_id = g.id
		JOIN tbl_ashrams a ON c.ashram_id = a.id
		JOIN tbl_charstats cs ON c.charstats_id = cs.id
		JOIN tbl_tribes t ON c.tribe_id = t.id
		JOIN tbl_castesystem csm ON cs.caste_id = csm.id WHERE c.tribe_id = 7";
	}

	// SELECT with ranking - All gods, Display only Garuda tribe - Order ranking by MP
	elseif($optionbygod == "all" && $optionbytribe == "garuda"){
		$sql = "SELECT charname, god_name, god_icon_path, ashram_name, tribe_icon_path, tribe_name, masterpoint, caste_name, rank() OVER (ORDER BY masterpoint DESC) AS 'result_ranking' FROM tbl_characters c
		JOIN tbl_gods g ON c.god_id = g.id
		JOIN tbl_ashrams a ON c.ashram_id = a.id
		JOIN tbl_charstats cs ON c.charstats_id = cs.id
		JOIN tbl_tribes t ON c.tribe_id = t.id
		JOIN tbl_castesystem csm ON cs.caste_id = csm.id WHERE c.tribe_id = 8";
	}

	// SELECT with ranking - brahma god, Display only Naga tribe - Order ranking by MP
	elseif($optionbygod == "brahma" && $optionbytribe == "naga"){
		$sql = "SELECT charname, god_name, god_icon_path, ashram_name, tribe_icon_path, tribe_name, masterpoint, caste_name, rank() OVER (PARTITION BY god_name ORDER BY masterpoint DESC) AS 'result_ranking' FROM tbl_characters c
		JOIN tbl_gods g ON c.god_id = g.id
		JOIN tbl_ashrams a ON c.ashram_id = a.id
		JOIN tbl_charstats cs ON c.charstats_id = cs.id
		JOIN tbl_tribes t ON c.tribe_id = t.id
		JOIN tbl_castesystem csm ON cs.caste_id = csm.id WHERE c.tribe_id = 1 AND c.god_id = 1";
	}

	// SELECT with ranking - brahma god, Display only kimnara tribe - Order ranking by MP
	elseif($optionbygod == "brahma" && $optionbytribe == "kimnara"){
		$sql = "SELECT charname, god_name, god_icon_path, ashram_name, tribe_icon_path, tribe_name, masterpoint, caste_name, rank() OVER (PARTITION BY god_name ORDER BY masterpoint DESC) AS 'result_ranking' FROM tbl_characters c
		JOIN tbl_gods g ON c.god_id = g.id
		JOIN tbl_ashrams a ON c.ashram_id = a.id
		JOIN tbl_charstats cs ON c.charstats_id = cs.id
		JOIN tbl_tribes t ON c.tribe_id = t.id
		JOIN tbl_castesystem csm ON cs.caste_id = csm.id WHERE c.tribe_id = 2 AND c.god_id = 1";
	}

	// SELECT with ranking - brahma god, Display only asura tribe - Order ranking by MP
	elseif($optionbygod == "brahma" && $optionbytribe == "asura"){
		$sql = "SELECT charname, god_name, god_icon_path, ashram_name, tribe_icon_path, tribe_name, masterpoint, caste_name, rank() OVER (PARTITION BY god_name ORDER BY masterpoint DESC) AS 'result_ranking' FROM tbl_characters c
		JOIN tbl_gods g ON c.god_id = g.id
		JOIN tbl_ashrams a ON c.ashram_id = a.id
		JOIN tbl_charstats cs ON c.charstats_id = cs.id
		JOIN tbl_tribes t ON c.tribe_id = t.id
		JOIN tbl_castesystem csm ON cs.caste_id = csm.id WHERE c.tribe_id = 3 AND c.god_id = 1";
	}

	// SELECT with ranking - brahma god, Display only rakshasa tribe - Order ranking by MP
	elseif($optionbygod == "brahma" && $optionbytribe == "rakshasa"){
		$sql = "SELECT charname, god_name, god_icon_path, ashram_name, tribe_icon_path, tribe_name, masterpoint, caste_name, rank() OVER (PARTITION BY god_name ORDER BY masterpoint DESC) AS 'result_ranking' FROM tbl_characters c
		JOIN tbl_gods g ON c.god_id = g.id
		JOIN tbl_ashrams a ON c.ashram_id = a.id
		JOIN tbl_charstats cs ON c.charstats_id = cs.id
		JOIN tbl_tribes t ON c.tribe_id = t.id
		JOIN tbl_castesystem csm ON cs.caste_id = csm.id WHERE c.tribe_id = 4 AND c.god_id = 1";
	}

	// SELECT with ranking - brahma god, Display only yaksa tribe - Order ranking by MP
	elseif($optionbygod == "brahma" && $optionbytribe == "yaksa"){
		$sql = "SELECT charname, god_name, god_icon_path, ashram_name, tribe_icon_path, tribe_name, masterpoint, caste_name, rank() OVER (PARTITION BY god_name ORDER BY masterpoint DESC) AS 'result_ranking' FROM tbl_characters c
		JOIN tbl_gods g ON c.god_id = g.id
		JOIN tbl_ashrams a ON c.ashram_id = a.id
		JOIN tbl_charstats cs ON c.charstats_id = cs.id
		JOIN tbl_tribes t ON c.tribe_id = t.id
		JOIN tbl_castesystem csm ON cs.caste_id = csm.id WHERE c.tribe_id = 5 AND c.god_id = 1";
	}

	// SELECT with ranking - brahma god, Display only gandharva tribe - Order ranking by MP
	elseif($optionbygod == "brahma" && $optionbytribe == "gandharva"){
		$sql = "SELECT charname, god_name, god_icon_path, ashram_name, tribe_icon_path, tribe_name, masterpoint, caste_name, rank() OVER (PARTITION BY god_name ORDER BY masterpoint DESC) AS 'result_ranking' FROM tbl_characters c
		JOIN tbl_gods g ON c.god_id = g.id
		JOIN tbl_ashrams a ON c.ashram_id = a.id
		JOIN tbl_charstats cs ON c.charstats_id = cs.id
		JOIN tbl_tribes t ON c.tribe_id = t.id
		JOIN tbl_castesystem csm ON cs.caste_id = csm.id WHERE c.tribe_id = 6 AND c.god_id = 1";
	}


	// SELECT with ranking - brahma god, Display only deva tribe - Order ranking by MP
	elseif($optionbygod == "brahma" && $optionbytribe == "deva"){
		$sql = "SELECT charname, god_name, god_icon_path, ashram_name, tribe_icon_path, tribe_name, masterpoint, caste_name, rank() OVER (PARTITION BY god_name ORDER BY masterpoint DESC) AS 'result_ranking' FROM tbl_characters c
		JOIN tbl_gods g ON c.god_id = g.id
		JOIN tbl_ashrams a ON c.ashram_id = a.id
		JOIN tbl_charstats cs ON c.charstats_id = cs.id
		JOIN tbl_tribes t ON c.tribe_id = t.id
		JOIN tbl_castesystem csm ON cs.caste_id = csm.id WHERE c.tribe_id = 7 AND c.god_id = 1";
	}


	// SELECT with ranking - brahma god, Display only garuda tribe - Order ranking by MP
	elseif($optionbygod == "brahma" && $optionbytribe == "garuda"){
		$sql = "SELECT charname, god_name, god_icon_path, ashram_name, tribe_icon_path, tribe_name, masterpoint, caste_name, rank() OVER (PARTITION BY god_name ORDER BY masterpoint DESC) AS 'result_ranking' FROM tbl_characters c
		JOIN tbl_gods g ON c.god_id = g.id
		JOIN tbl_ashrams a ON c.ashram_id = a.id
		JOIN tbl_charstats cs ON c.charstats_id = cs.id
		JOIN tbl_tribes t ON c.tribe_id = t.id
		JOIN tbl_castesystem csm ON cs.caste_id = csm.id WHERE c.tribe_id = 8 AND c.god_id = 1";
	}


	// SELECT with ranking - shiva god, Display only naga tribe - Order ranking by MP
	elseif($optionbygod == "shiva" && $optionbytribe == "naga"){
		$sql = "SELECT charname, god_name, god_icon_path, ashram_name, tribe_icon_path, tribe_name, masterpoint, caste_name, rank() OVER (PARTITION BY god_name ORDER BY masterpoint DESC) AS 'result_ranking' FROM tbl_characters c
		JOIN tbl_gods g ON c.god_id = g.id
		JOIN tbl_ashrams a ON c.ashram_id = a.id
		JOIN tbl_charstats cs ON c.charstats_id = cs.id
		JOIN tbl_tribes t ON c.tribe_id = t.id
		JOIN tbl_castesystem csm ON cs.caste_id = csm.id WHERE c.tribe_id = 1 AND c.god_id = 2";
	}

	// SELECT with ranking - shiva god, Display only kimnara tribe - Order ranking by MP
	elseif($optionbygod == "shiva" && $optionbytribe == "kimnara"){
		$sql = "SELECT charname, god_name, god_icon_path, ashram_name, tribe_icon_path, tribe_name, masterpoint, caste_name, rank() OVER (PARTITION BY god_name ORDER BY masterpoint DESC) AS 'result_ranking' FROM tbl_characters c
		JOIN tbl_gods g ON c.god_id = g.id
		JOIN tbl_ashrams a ON c.ashram_id = a.id
		JOIN tbl_charstats cs ON c.charstats_id = cs.id
		JOIN tbl_tribes t ON c.tribe_id = t.id
		JOIN tbl_castesystem csm ON cs.caste_id = csm.id WHERE c.tribe_id = 2 AND c.god_id = 2";
	}


	// SELECT with ranking - shiva god, Display only asura tribe - Order ranking by MP
	elseif($optionbygod == "shiva" && $optionbytribe == "asura"){
		$sql = "SELECT charname, god_name, god_icon_path, ashram_name, tribe_icon_path, tribe_name, masterpoint, caste_name, rank() OVER (PARTITION BY god_name ORDER BY masterpoint DESC) AS 'result_ranking' FROM tbl_characters c
		JOIN tbl_gods g ON c.god_id = g.id
		JOIN tbl_ashrams a ON c.ashram_id = a.id
		JOIN tbl_charstats cs ON c.charstats_id = cs.id
		JOIN tbl_tribes t ON c.tribe_id = t.id
		JOIN tbl_castesystem csm ON cs.caste_id = csm.id WHERE c.tribe_id = 3 AND c.god_id = 2";
	}


	// SELECT with ranking - shiva god, Display only rakshasa tribe - Order ranking by MP
	elseif($optionbygod == "shiva" && $optionbytribe == "rakshasa"){
		$sql = "SELECT charname, god_name, god_icon_path, ashram_name, tribe_icon_path, tribe_name, masterpoint, caste_name, rank() OVER (PARTITION BY god_name ORDER BY masterpoint DESC) AS 'result_ranking' FROM tbl_characters c
		JOIN tbl_gods g ON c.god_id = g.id
		JOIN tbl_ashrams a ON c.ashram_id = a.id
		JOIN tbl_charstats cs ON c.charstats_id = cs.id
		JOIN tbl_tribes t ON c.tribe_id = t.id
		JOIN tbl_castesystem csm ON cs.caste_id = csm.id WHERE c.tribe_id = 4 AND c.god_id = 2";
	}


	// SELECT with ranking - shiva god, Display only yaksa tribe - Order ranking by MP
	elseif($optionbygod == "shiva" && $optionbytribe == "yaksa"){
		$sql = "SELECT charname, god_name, god_icon_path, ashram_name, tribe_icon_path, tribe_name, masterpoint, caste_name, rank() OVER (PARTITION BY god_name ORDER BY masterpoint DESC) AS 'result_ranking' FROM tbl_characters c
		JOIN tbl_gods g ON c.god_id = g.id
		JOIN tbl_ashrams a ON c.ashram_id = a.id
		JOIN tbl_charstats cs ON c.charstats_id = cs.id
		JOIN tbl_tribes t ON c.tribe_id = t.id
		JOIN tbl_castesystem csm ON cs.caste_id = csm.id WHERE c.tribe_id = 5 AND c.god_id = 2";
	}


	// SELECT with ranking - shiva god, Display only gandharva tribe - Order ranking by MP
	elseif($optionbygod == "shiva" && $optionbytribe == "gandharva"){
		$sql = "SELECT charname, god_name, god_icon_path, ashram_name, tribe_icon_path, tribe_name, masterpoint, caste_name, rank() OVER (PARTITION BY god_name ORDER BY masterpoint DESC) AS 'result_ranking' FROM tbl_characters c
		JOIN tbl_gods g ON c.god_id = g.id
		JOIN tbl_ashrams a ON c.ashram_id = a.id
		JOIN tbl_charstats cs ON c.charstats_id = cs.id
		JOIN tbl_tribes t ON c.tribe_id = t.id
		JOIN tbl_castesystem csm ON cs.caste_id = csm.id WHERE c.tribe_id = 6 AND c.god_id = 2";
	}


	// SELECT with ranking - shiva god, Display only deva tribe - Order ranking by MP
	elseif($optionbygod == "shiva" && $optionbytribe == "deva"){
		$sql = "SELECT charname, god_name, god_icon_path, ashram_name, tribe_icon_path, tribe_name, masterpoint, caste_name, rank() OVER (PARTITION BY god_name ORDER BY masterpoint DESC) AS 'result_ranking' FROM tbl_characters c
		JOIN tbl_gods g ON c.god_id = g.id
		JOIN tbl_ashrams a ON c.ashram_id = a.id
		JOIN tbl_charstats cs ON c.charstats_id = cs.id
		JOIN tbl_tribes t ON c.tribe_id = t.id
		JOIN tbl_castesystem csm ON cs.caste_id = csm.id WHERE c.tribe_id = 7 AND c.god_id = 2";
	}


	// SELECT with ranking - shiva god, Display only garuda tribe - Order ranking by MP
	elseif($optionbygod == "shiva" && $optionbytribe == "garuda"){
		$sql = "SELECT charname, god_name, god_icon_path, ashram_name, tribe_icon_path, tribe_name, masterpoint, caste_name, rank() OVER (PARTITION BY god_name ORDER BY masterpoint DESC) AS 'result_ranking' FROM tbl_characters c
		JOIN tbl_gods g ON c.god_id = g.id
		JOIN tbl_ashrams a ON c.ashram_id = a.id
		JOIN tbl_charstats cs ON c.charstats_id = cs.id
		JOIN tbl_tribes t ON c.tribe_id = t.id
		JOIN tbl_castesystem csm ON cs.caste_id = csm.id WHERE c.tribe_id = 8 AND c.god_id = 2";
	}


	// SELECT with ranking - vishnu god, Display only naga tribe - Order ranking by MP
	elseif($optionbygod == "vishnu" && $optionbytribe == "naga"){
		$sql = "SELECT charname, god_name, god_icon_path, ashram_name, tribe_icon_path, tribe_name, masterpoint, caste_name, rank() OVER (PARTITION BY god_name ORDER BY masterpoint DESC) AS 'result_ranking' FROM tbl_characters c
		JOIN tbl_gods g ON c.god_id = g.id
		JOIN tbl_ashrams a ON c.ashram_id = a.id
		JOIN tbl_charstats cs ON c.charstats_id = cs.id
		JOIN tbl_tribes t ON c.tribe_id = t.id
		JOIN tbl_castesystem csm ON cs.caste_id = csm.id WHERE c.tribe_id = 1 AND c.god_id = 3";
	}


	// SELECT with ranking - vishnu god, Display only kimnara tribe - Order ranking by MP
	elseif($optionbygod == "vishnu" && $optionbytribe == "kimnara"){
		$sql = "SELECT charname, god_name, god_icon_path, ashram_name, tribe_icon_path, tribe_name, masterpoint, caste_name, rank() OVER (PARTITION BY god_name ORDER BY masterpoint DESC) AS 'result_ranking' FROM tbl_characters c
		JOIN tbl_gods g ON c.god_id = g.id
		JOIN tbl_ashrams a ON c.ashram_id = a.id
		JOIN tbl_charstats cs ON c.charstats_id = cs.id
		JOIN tbl_tribes t ON c.tribe_id = t.id
		JOIN tbl_castesystem csm ON cs.caste_id = csm.id WHERE c.tribe_id = 2 AND c.god_id = 3";
	}


	// SELECT with ranking - vishnu god, Display only asura tribe - Order ranking by MP
	elseif($optionbygod == "vishnu" && $optionbytribe == "asura"){
		$sql = "SELECT charname, god_name, god_icon_path, ashram_name, tribe_icon_path, tribe_name, masterpoint, caste_name, rank() OVER (PARTITION BY god_name ORDER BY masterpoint DESC) AS 'result_ranking' FROM tbl_characters c
		JOIN tbl_gods g ON c.god_id = g.id
		JOIN tbl_ashrams a ON c.ashram_id = a.id
		JOIN tbl_charstats cs ON c.charstats_id = cs.id
		JOIN tbl_tribes t ON c.tribe_id = t.id
		JOIN tbl_castesystem csm ON cs.caste_id = csm.id WHERE c.tribe_id = 3 AND c.god_id = 3";
	}


	// SELECT with ranking - vishnu god, Display only rakshasa tribe - Order ranking by MP
	elseif($optionbygod == "vishnu" && $optionbytribe == "rakshasa"){
		$sql = "SELECT charname, god_name, god_icon_path, ashram_name, tribe_icon_path, tribe_name, masterpoint, caste_name, rank() OVER (PARTITION BY god_name ORDER BY masterpoint DESC) AS 'result_ranking' FROM tbl_characters c
		JOIN tbl_gods g ON c.god_id = g.id
		JOIN tbl_ashrams a ON c.ashram_id = a.id
		JOIN tbl_charstats cs ON c.charstats_id = cs.id
		JOIN tbl_tribes t ON c.tribe_id = t.id
		JOIN tbl_castesystem csm ON cs.caste_id = csm.id WHERE c.tribe_id = 4 AND c.god_id = 3";
	}


	// SELECT with ranking - vishnu god, Display only yaksa tribe - Order ranking by MP
	elseif($optionbygod == "vishnu" && $optionbytribe == "yaksa"){
		$sql = "SELECT charname, god_name, god_icon_path, ashram_name, tribe_icon_path, tribe_name, masterpoint, caste_name, rank() OVER (PARTITION BY god_name ORDER BY masterpoint DESC) AS 'result_ranking' FROM tbl_characters c
		JOIN tbl_gods g ON c.god_id = g.id
		JOIN tbl_ashrams a ON c.ashram_id = a.id
		JOIN tbl_charstats cs ON c.charstats_id = cs.id
		JOIN tbl_tribes t ON c.tribe_id = t.id
		JOIN tbl_castesystem csm ON cs.caste_id = csm.id WHERE c.tribe_id = 5 AND c.god_id = 3";
	}


	// SELECT with ranking - vishnu god, Display only gandharva tribe - Order ranking by MP
	elseif($optionbygod == "vishnu" && $optionbytribe == "gandharva"){
		$sql = "SELECT charname, god_name, god_icon_path, ashram_name, tribe_icon_path, tribe_name, masterpoint, caste_name, rank() OVER (PARTITION BY god_name ORDER BY masterpoint DESC) AS 'result_ranking' FROM tbl_characters c
		JOIN tbl_gods g ON c.god_id = g.id
		JOIN tbl_ashrams a ON c.ashram_id = a.id
		JOIN tbl_charstats cs ON c.charstats_id = cs.id
		JOIN tbl_tribes t ON c.tribe_id = t.id
		JOIN tbl_castesystem csm ON cs.caste_id = csm.id WHERE c.tribe_id = 6 AND c.god_id = 3";
	}


	// SELECT with ranking - vishnu god, Display only deva tribe - Order ranking by MP
	elseif($optionbygod == "vishnu" && $optionbytribe == "deva"){
		$sql = "SELECT charname, god_name, god_icon_path, ashram_name, tribe_icon_path, tribe_name, masterpoint, caste_name, rank() OVER (PARTITION BY god_name ORDER BY masterpoint DESC) AS 'result_ranking' FROM tbl_characters c
		JOIN tbl_gods g ON c.god_id = g.id
		JOIN tbl_ashrams a ON c.ashram_id = a.id
		JOIN tbl_charstats cs ON c.charstats_id = cs.id
		JOIN tbl_tribes t ON c.tribe_id = t.id
		JOIN tbl_castesystem csm ON cs.caste_id = csm.id WHERE c.tribe_id = 7 AND c.god_id = 3";
	}


	// SELECT with ranking - vishnu god, Display only garuda tribe - Order ranking by MP
	elseif($optionbygod == "vishnu" && $optionbytribe == "garuda"){
		$sql = "SELECT charname, god_name, god_icon_path, ashram_name, tribe_icon_path, tribe_name, masterpoint, caste_name, rank() OVER (PARTITION BY god_name ORDER BY masterpoint DESC) AS 'result_ranking' FROM tbl_characters c
		JOIN tbl_gods g ON c.god_id = g.id
		JOIN tbl_ashrams a ON c.ashram_id = a.id
		JOIN tbl_charstats cs ON c.charstats_id = cs.id
		JOIN tbl_tribes t ON c.tribe_id = t.id
		JOIN tbl_castesystem csm ON cs.caste_id = csm.id WHERE c.tribe_id = 8 AND c.god_id = 3";
	}






"SELECT charname, god_name, god_icon_path, ashram_name, tribe_icon_path, tribe_name, masterpoint, caste_name, rank() OVER (PARTITION BY god_name ORDER BY masterpoint DESC) AS 'result_ranking' FROM tbl_characters c
		JOIN tbl_gods g ON c.god_id = g.id
		JOIN tbl_ashrams a ON c.ashram_id = a.id
		JOIN tbl_charstats cs ON c.charstats_id = cs.id
		JOIN tbl_tribes t ON c.tribe_id = t.id
		JOIN tbl_castesystem csm ON cs.caste_id = csm.id WHERE c.tribe_id = 8 AND c.god_id = 3"



"SELECT charname, god_name, god_icon_path, ashram_name, tribe_icon_path, tribe_name, masterpoint, caste_name, rank FROM tbl_characters c, (SELECT @curRank := 0) r
		JOIN tbl_gods g ON c.god_id = g.id
		JOIN tbl_ashrams a ON c.ashram_id = a.id
		JOIN tbl_charstats cs ON c.charstats_id = cs.id
		JOIN tbl_tribes t ON c.tribe_id = t.id
		JOIN tbl_castesystem csm ON cs.caste_id = csm.id WHERE c.tribe_id = 8 AND c.god_id = 3
		ORDER BY masterpoint DESC"


"SELECT *, (SELECT *, 1+count(*) FROM tbl_charstats b WHERE tbl_charstats.masterpoint<b.masterpoint) AS RANK FROM tbl_charstats"



SET @row_number = 0;
"SELECT charname, god_name, god_icon_path, ashram_name, tribe_icon_path, tribe_name, masterpoint, caste_name, (SELECT @row_number:=@row_number+1 FROM tbl_characters ccs JOIN tbl_charstats cs ON ccs.charstats_id = cs.id WHERE cs.masterpoint<cs.masterpoint) AS RANK FROM tbl_characters c
		JOIN tbl_gods g ON c.god_id = g.id
		JOIN tbl_ashrams a ON c.ashram_id = a.id
		JOIN tbl_charstats cs ON c.charstats_id = cs.id
		JOIN tbl_tribes t ON c.tribe_id = t.id
		JOIN tbl_castesystem csm ON cs.caste_id = csm.id WHERE c.tribe_id = 8 AND c.god_id = 3"


"SELECT charname, god_name, god_icon_path, ashram_name, tribe_icon_path, tribe_name, masterpoint, caste_name, 1+
	(SELECT count(*) FROM tbl_charstats cs WHERE masterpoint<(SELECT masterpoint FROM tbl_charstats WHERE masterpoint=cs.masterpoint))

	 AS RANK FROM tbl_characters c
		JOIN tbl_gods g ON c.god_id = g.id
		JOIN tbl_ashrams a ON c.ashram_id = a.id
		JOIN tbl_charstats cs ON c.charstats_id = cs.id
		JOIN tbl_tribes t ON c.tribe_id = t.id
		JOIN tbl_castesystem csm ON cs.caste_id = csm.id WHERE c.tribe_id = 8 AND c.god_id = 3"


// without editing last FROM
"SELECT charname, god_name, god_icon_path, ashram_name, tribe_icon_path, tribe_name, masterpoint, caste_name, 1+
	(SELECT count(*) FROM 
		(SELECT masterpoint FROM tbl_characters c JOIN tbl_charstats cs ON c.charstats_id = cs.id) t WHERE masterpoint<t.masterpoint) AS RANK 

	FROM tbl_characters c
		JOIN tbl_gods g ON c.god_id = g.id
		JOIN tbl_ashrams a ON c.ashram_id = a.id
		JOIN tbl_charstats cs ON c.charstats_id = cs.id
		JOIN tbl_tribes t ON c.tribe_id = t.id
		JOIN tbl_castesystem csm ON cs.caste_id = csm.id WHERE c.tribe_id = 8 AND c.god_id = 3"



//CURRENT
	"SELECT charname, god_name, god_icon_path, ashram_name, tribe_icon_path, tribe_name, masterpoint, caste_name, 1+
		(SELECT count(*) FROM 
			(SELECT masterpoint FROM tbl_characters c JOIN tbl_charstats cs ON c.charstats_id = cs.id) k WHERE masterpoint<k.masterpoint) AS RANK 

		FROM (SELECT c.charname AS charname, g.god_name AS god_name, g.god_icon_path AS god_icon_path, a.ashram_name AS ashram_name, t.tribe_icon_path AS tribe_icon_path, t.tribe_name AS tribe_name, cs.masterpoint AS masterpoint, csm.caste_name AS caste_name 
			FROM tbl_characters c
			JOIN tbl_gods g ON c.god_id = g.id
			JOIN tbl_ashrams a ON c.ashram_id = a.id
			JOIN tbl_charstats cs ON c.charstats_id = cs.id
			JOIN tbl_tribes t ON c.tribe_id = t.id
			JOIN tbl_castesystem csm ON cs.caste_id = csm.id) k 



	tbl_characters c

		JOIN tbl_gods g ON c.god_id = g.id
		JOIN tbl_ashrams a ON c.ashram_id = a.id
		JOIN tbl_charstats cs ON c.charstats_id = cs.id
		JOIN tbl_tribes t ON c.tribe_id = t.id
		JOIN tbl_castesystem csm ON cs.caste_id = csm.id WHERE c.tribe_id = 8 AND c.god_id = 3"



SET @row_number = 0;



	$data = "<table class='table mydatatable table-dark table-ranking text-center'>
				<thead class='thead-dark table-ranking-header'>
					<tr class='ranking-subheader'>
						<th scope='col'>Rank</th>
						<th scope='col'>Tribe</th>
						<th scope='col'>Player</th>
						<th scope='col'>Masterpoints</th>
						<th scope='col'>Caste</th>
						<th scope='col'>Ashram</th>
						<th scope='col'>God</th>
					</tr>
				</thead>
				<tbody class='ranking-data'>";

	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result)>0) {
		while($rowmain = mysqli_fetch_assoc($result)){
			$rank = $rowmain['result_ranking'];
			$tribe_icon_path = $rowmain['tribe_icon_path'];
			$tribe_name = $rowmain['tribe_name'];
			$player = $rowmain['charname'];
			$masterpoints = $rowmain['masterpoint'];
			$caste = $rowmain['caste_name'];
			$ashram = $rowmain['ashram_name'];
			$god_icon_path = $rowmain['god_icon_path'];
			$god_name = $rowmain['god_name'];

			$data .= "
					<tr>
						<td>$rank</td>
						<td><img src='$tribe_icon_path' alt='$tribe_name' title='$tribe_name'></td>
						<td>$player</td>
						<td>$masterpoints</td>
						<td>$caste</td>
						<td>$ashram</td>
						<td><img src='$god_icon_path' alt='$god_name' title='$god_name'></td>
					</tr>";	
		};

	}

echo $data;

mysqli_close($conn);

?>