<?php  

try{
	require_once("connectBooks.php");
	// $sql="select * from art where ART_type=:ART_type order by ";
	switch($_REQUEST["ART_type"]){
		case "熱門文章" :
			// echo "熱門文章";
			$sql="select * from art  order by ART_nice desc ";
			$art=$pdo->query($sql);
			$str='<?xml version="1.0" ?>';
			$str.= '<art>';
			for($i=0;$i<3;$i++){
				$artRow = $art->fetch(PDO::FETCH_ASSOC);
				$str.='<artTitle>'.$artRow["ART_title"].'</artTitle>';
				$str.='<artImg>'.$artRow["ART_image"].'</artImg>';
				$str.='<artNo>'.$artRow["ART_no"].'</artNo>';
			}
			$str.='</art>';
			break;
		default :
			$sql="select * from art where ART_type=:ART_type order by ART_nice desc ";
			$art=$pdo->prepare($sql);
			$art->bindValue(":ART_type",$_REQUEST["ART_type"]);
			$art->execute();
			$str='<?xml version="1.0" ?>';
			$str.= '<art>';
			for($i=0;$i<3;$i++){
				$artRow = $art->fetch(PDO::FETCH_ASSOC);
				$str.='<artTitle>'.$artRow["ART_title"].'</artTitle>';
				$str.='<artImg>'.$artRow["ART_image"].'</artImg>';
				$str.='<artNo>'.$artRow["ART_no"].'</artNo>';
			}
			$str.='</art>';
			break;

	}
	header("Content-type:text/xml");
	echo $str;

}catch(PDOException $e){
	echo $e -> getMessage();
}

?>