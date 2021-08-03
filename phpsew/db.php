<?php

/**
* Conexion a la base de datos y funciones
* Autor: evilnapsis
**/

function con(){
	return new mysqli("localhost","root","","multi_upload");
}

function search_usuarios($search){
    $images = array();
    $con = con();
	$query=$con->query('SELECT * FROM usuarios WHERE nombre LIKE "%'.$search.'%" ');
    while($r=$query->fetch_object()){
        $images[] = $r;
    }
    return $images;
}



function get_usuarios(){
	$images = array();
	$con = con();
	$query=$con->query("SELECT * FROM usuarios order by id");
	while($r=$query->fetch_object()){
		$images[] = $r;
	}
	return $images;
}


function insert_img($folder, $image){
	$con = con();
	$con->query("insert into image (folder,src,created_at) value (\"$folder\",\"$image\",NOW())");
}

function get_imgs(){
	$images = array();
	$con = con();
	$query=$con->query("select * from image order by created_at") or die ("Error al consultar producto".mysqli_error($con)); 

	while($r=$query->fetch_object()){
		$images[] = $r;
	}
	return $images;
}

function get_imgs_asc(){
	$images = array();
	$con = con();
	$query=$con->query("select * from image order by created_at desc");
	while($r=$query->fetch_object()){
		$images[] = $r;
	}
	return $images;
}


function get_img($nom){
	$image = null;
	$con = con();
	$query=$con->query("select * from image where src=$nom");
	while($r=$query->fetch_object()){
		$image = $r;
	}
	return $image;
}

function del($id){
	$con = con();
	$con->query("delete from image where id=$id");
}









function get_todo_fecha($search, $search2){
	$images = array();
	$con = con();


	$query=$con->query('SELECT * FROM `image` WHERE created_at BETWEEN "'.$search.'" AND "'.$search2.'"  ');
	
	while($r=$query->fetch_object()){
		$images[] = $r;
	}
	return $images;
}






function seleccion_documento($search){
    $images = array();
    $con = con();
	$query=$con->query('SELECT * FROM image WHERE src LIKE "%'.$search.'%" ');
    while($r=$query->fetch_object()){
        $images[] = $r;
    }
    return $images;
}


function get_imgs_porid(){
	$images = array();
	$con = con();
	$query=$con->query("select * from image order by id desc");
	while($r=$query->fetch_object()){
		$images[] = $r;
	}
	return $images;
}


/*consulta generica*/
function search_genriconombre($search){
    $images = array();
    $con = con();
    $query=$con->query('select * from image where src like "%'.$search.'%"');
    while($r=$query->fetch_object()){
        $images[] = $r;
    }
    return $images;
}

function search_genricoid($search){
    $images = array();
    $con = con();
	$query=$con->query('select * from image where id ='.$search.'');
    while($r=$query->fetch_object()){
        $images[] = $r;
    }
    return $images;
}



?>