<?php

class Post{
	
	private $id;
    private $titulo;
    private $subtitulo;
    private $descripcion;
	private $tags;
	private	$post_date;    
	
	public function agregar($titulo,$subtitulo,$descripcion,$tags,$post_date) 
	{  
	    $db = conectar();
	    $stmt = $db->prepare("INSERT INTO post (titulo, subtitulo, descripcion, tags, post_date) VALUES(:titulo, :subtitulo, :descripcion, :tags, :post_date)");
	    $stmt->bindParam(':titulo', $titulo);
	    $stmt->bindParam(':subtitulo', $subtitulo);
	    $stmt->bindParam(':descripcion', $descripcion);
		$stmt->bindParam(':tags', $tags);
		$stmt->bindParam(':post_date', $post_date);
	    $stmt->execute();
    }
}
?>