<?php
//die(var_dump($_POST));
$db = mysqli_connect("localhost", "root", "", "plantillas");

if ($_POST["option"] == "alta") {

	$check = $_POST["checkPressed"];
	$textHeader = $db->real_escape_string(nl2br($_POST["textHeader"]));
	$urlVideo = $db->real_escape_string($_POST["urlVideo"]);
	$firstDescription = $db->real_escape_string($_POST["firstDescription"]);
	$secondDescription = $db->real_escape_string($_POST["secondDescription"]);
	$textproduct = $db->real_escape_string($_POST["productDescription"]);

	$sql_statement = "INSERT INTO trafficker_pack (text_header,video_url,first_description,second_description,product_description,picture_pack) VALUES ('" . $textHeader . "','" . $urlVideo . "','" . $firstDescription . "','" . $secondDescription . "','" . $textproduct . "'," . $check . ")";

	$db->query($sql_statement);

	$packID = $db->insert_id;
	$path = "img/packs/" . $packID . "/";
	$name_header = "header.jpg";
	$name_product = "product.jpg";
	if (!file_exists($path)) {
		mkdir($path, 0777, true);
	}
	move_uploaded_file($_FILES['file-input']['tmp_name'], $path . $name_header);
	move_uploaded_file($_FILES['file-input2']['tmp_name'], $path . $name_product);

	$db->close();
	header("Location: Editor.php?alta=1");

}
if ($_POST["option"] == "modificar") {

	$idModificar = $_GET["id"];

	$check = $_POST["checkPressed"];
	$textHeader = $db->real_escape_string(nl2br($_POST["textHeader"]));
	$urlVideo = $db->real_escape_string($_POST["urlVideo"]);
	$firstDescription = $db->real_escape_string($_POST["firstDescription"]);
	$secondDescription = $db->real_escape_string($_POST["secondDescription"]);
	$textproduct = $db->real_escape_string($_POST["productDescription"]);
	$imagen_cabera = $_FILES['file-input']["tmp_name"];
	$imagen_producto = $_FILES['file-input2']["tmp_name"];

	$sql_statementImage = "Update trafficker_pack  SET text_header='" . $textHeader . "',video_url='" . $urlVideo . "',first_description='" . $firstDescription . "',second_description='" . $secondDescription . "',product_description='" . $textproduct . "',picture_pack=" . $check . " WHERE id=" . $idModificar;

	$db->query($sql_statementImage);
	$db->close();

	$name_header = "header.jpg";
	$name_product = "product.jpg";
	$path = "img/packs/" . $idModificar . "/";
	if ($imagen_cabera != "") {
		if (!file_exists($path)) {
			mkdir($path, 0777, true);
		}

	}

	if ($imagen_producto != "") {
		if (!file_exists($path)) {
			mkdir($path, 0777, true);
		}

	}
	header("Location: Editor.php?modificar=1&id=" . $idModificar);
}

?>