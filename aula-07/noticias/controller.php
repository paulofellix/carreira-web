<?php 

require_once('../config.php');
require_once(DATABASE);

$news = null;

function index(){

	global $news;
	$news = find_all('news');
}

function view($id = null){	
	
	if ($id)
	{
		global $news;
		$news = find_all('news',$id);
	}else{
		die('ID?');
	}
}

function add()
{
	if(isset($_POST['news']))
	{
		global $news;
		$news = $_POST['news'];
		$news['date'] = date("Y-m-d H:i:s");
		// print_r($news);
		// die();
		save('news',$news);
		header('location: index.php');
	}
}

function delete($id){

	if (isset($_GET['id'])){
		remove('news',$_GET['id']);
		header('location: index.php');
	}else{
		die("ID?");
	}
}

?>

