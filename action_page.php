<?php
//die(var_dump($_FILES));
$db = mysqli_connect("localhost", "root", "", "plantillas");

if($_POST["opcion"]=="alta"){
    
    $check = $_POST["checkpulsado"];
	$textarea1 = $_POST["textarea1"];
	$urlVideo = $_POST["Video"];
	$textarea2 = $_POST["textarea2"];
	$textarea3 = $_POST["textarea3"];
	$textproduct = $_POST["textoParrafo"];
	
	$sql_statement="INSERT INTO trafficker_pack (text_header,url_video,textarea_1,textarea_2,textarea_product,packImagen) VALUES ('".$textarea1."','".$urlVideo."','".$textarea2."','".$textarea3."','".$textproduct."',".$check.")"; 
     //die($sql_statement);
	$db->query($sql_statement);
	$sqlInsert = "SELECT MAX(id) as id FROM trafficker_pack ";
	$resultadoInsert = mysqli_query($db,$sqlInsert);
    $rowInsert = mysqli_fetch_array($resultadoInsert,MYSQLI_ASSOC);
    $packID=($rowInsert["id"]);
    $path = "img/packs/".$packID."/";
    $name_header = "header.jpg";
    $name_product = "product.jpg";
    if (!file_exists($path)) {
		mkdir($path, 0777, true);
	}
	move_uploaded_file($_FILES['file-input']['tmp_name'],$path.$name_header);
	move_uploaded_file($_FILES['file-input2']['tmp_name'],$path.$name_product);

	$sql_statementImage="Update trafficker_pack  SET image_header='".$path.$name_header."',img_product='".$path.$name_product."' WHERE id=".$packID;
	//die($sql_statementImage);
       //die(var_dump( $sql_statementBanner ));
    $db->query($sql_statementImage);
    $db->close();
    header("Location: Editor.php?alta=1");

}
if($_POST["opcion"]=="modificar"){
   //die($_GET["id"]);
	$idModificar=$_GET["id"];
    //die($var_dump($idModificar));
    $check = $_POST["checkpulsado"];
	$textarea1 = $_POST["textarea1"];
	$urlVideo = $_POST["Video"];
	$textarea2 = $_POST["textarea2"];
	$textarea3 = $_POST["textarea3"];
	$textproduct = $_POST["textoParrafo"];
	$imagen_cabera = $_FILES['file-input']["tmp_name"];;
	$imagen_producto = $_FILES['file-input2']["tmp_name"];
	if($imagen_cabera=="" && $imagen_producto==""){
		//$sql_statementImage="Update trafficker_pack  SET text_header='".$textarea1."',url_video='".$urlVideo."',textarea_1='".$textarea2."',textarea_2='".$textarea3."',textproduct='".$textproduct."' WHERE id=".$idModificar;
		$sql_statementImage="Update trafficker_pack  SET text_header='".$textarea1."',url_video='".$urlVideo."',textarea_1='".$textarea2."',textarea_2='".$textarea3."',textarea_product='".$textproduct."',packImagen=".$check." WHERE id=".$idModificar;
		//die($sql_statementImage);
		//die($sql_statementImage);
		$db->query($sql_statementImage);
    	$db->close();
    	header("Location: Editor.php?modificar=1&id=".$idModificar);

	}
	$name_header = "header.jpg";
    $name_product = "product.jpg";
    $path = "img/packs/".$idModificar."/";
	if($imagen_cabera!=""){
		if (!file_exists($path)) {
		mkdir($path, 0777, true);
		}
	move_uploaded_file($_FILES['file-input']['tmp_name'],$path.$name_header);
	$sql_statementImage="Update trafficker_pack  SET image_header='".$path.$name_header."' WHERE id=".$idModificar;
	//die($sql_statementImage);
       //die(var_dump( $sql_statementBanner ));
    $db->query($sql_statementImage);
    $db->close();
    header("Location: Editor.php?modificar=1&id=".$idModificar);
		

	}

	if($imagen_producto!=""){
		if (!file_exists($path)) {
		mkdir($path, 0777, true);
		}
	move_uploaded_file($_FILES['file-input2']['tmp_name'],$path.$name_product);
	$sql_statementImage="Update trafficker_pack  SET img_product='".$path.$name_product."' WHERE id=".$idModificar;
	//die($sql_statementImage);
       //die(var_dump( $sql_statementBanner ));
    $db->query($sql_statementImage);
    $db->close();
    header("Location: Editor.php?modificar=1&id=".$idModificar);
		

	}
	
	

}

?>