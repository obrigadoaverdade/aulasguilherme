<html>
<head>
<style>
#imagem {
width: 750px;
height: 750px;
-webkit-filter: brightness(40%) drop-shadow(5px 5px 5px #000);
}
</style>
</head>
<h1><center>Sermão da Montanha</center></h1>
<h2>5.</h2>

<?php
$bem = array(0=>"que tem um coração de pobre", 1=>"que choram", 2=>"mansos", 3=>"que tem fome e sede de justiça", 4=> "misericordiosos", 5=>"puros de coração", 6=>"pacíficos", 7=>"que são perseguidos por causa da justiça", 8=>" sereis quando vos caluniarem e perseguirem por causa de mim");
$porque = array(0=>"deles é o Reino dos Céus!", 1=>"serão consolados", 2=>"possuirão a terra", 3=>"serão saciados", 4=>"alcançarão misericórdia", 5=>"verão a Deus", 6=>"serão chamados filhos de Deus", 7=> "deles é o Reino dos Céus", 8=>"será grande a vossa recompensa nos céus");
$x_top = 120;
?>

<body>
<img id="imagem" src="figura.jpg">
<?php for ($i=0; $i < 9; $i++) { ?>
	<div style="color: white; position:absolute; left: 50; top: <?php echo $x_top; ?>; "> <?= $i+3 . ". &nbsp &nbsp &nbsp Bem-aventurados os<br> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp ".$bem[$i] . "<br> &nbsp &nbsp &nbsp &nbsp &nbsp porque ".$porque[$i]  ."<br><br>"; ?> </div>
	<?php $x_top+=80; }?>
</body>
</html>
