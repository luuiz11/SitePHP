<?php 
$pagina =['home','sobre'];
?>
<!DOCTYPE html>
	<html>
	<head>
	<title>website</title>
	<style type="text/css">{
margin: 0;
padding: 0;
box-sizing: border-box;
	}
	header{
		background-color: #069;
		padding: 8px 10px;
		text-align: center;
	}
	a{
		display: inline-block;
		margin: 0 10px;
		color: white;
		font-size: 17px;
	}
	section{
		max-width: 960px;
		margin: 20px auto;
		padding: 0 2%;
	}
	h2{
		background-color: #069;
		color white;
		padding: 8px 10px;

	}
	p{
		color: black;
		margin-top: 10px;
		font-size: 16px;
	}
</style>
</head>
<body>
<header>
	<?php
	foreach ($pagina as $key => $value) {
		echo '<a href="?page='.key.'">'.ucfirst($key).'</a>';
		}
	?>
</header>
<section>
	<h2><?php
$paginas = (isset($_GET['page'])?$_GET['page']:'home')
if (array_key_exists($paginas, $pagina)){
	$paginas= 'home';
}

echo ucfirst($paginas);

?></h2>
<p><?php echo $pagina [$paginas]; ?></p>
</section>
</body>
</html>