<?php

$nome = $_GET['nome'];

if($nome == "Hotpspotschublabs"){
$ingredientes = "Pão tostado no vulcão, hambúrguer misterioso, queijo derretido caótico e molho secreto do Rafão.";
$preco = "R$ 12,90";
}

elseif($nome == "RatoSupremo3000"){
$ingredientes = "Hambúrguer de rato defumado, queijo cheddar radioativo, cebola crocante e molho subterrâneo.";
$preco = "R$ 10,90";
}

elseif($nome == "TerraCrocanteDeluxe"){
$ingredientes = "Blend especial do Rafão com terra premium, alface da horta abandonada e maionese obscura.";
$preco = "R$ 9,90";
}

elseif($nome == "GorgonzolaRadioativo"){
$ingredientes = "Hambúrguer suculento com gorgonzola mutante, bacon crocante e molho nuclear.";
$preco = "R$ 13,90";
}

elseif($nome == "LarvaBaconMonster"){
$ingredientes = "Hambúrguer gigante com bacon crocante, larvas crocantes do deserto e molho barbecue proibido.";
$preco = "R$ 11,90";
}

else{
$ingredientes = "Hambúrguer misterioso criado pelo Rafão.";
$preco = "R$ 8,90";
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Hambúrguer</title>
<link rel="stylesheet" href="style.css">
<link rel="icon" href="imagens/logo.png">
</head>

<body>

<header>🍔 LANCHES DO RAFÃO 🍔</header>

<nav class="navbar">
<a href="index.php">Login</a>
<a href="home.php">Home</a>
<a href="menu.php">Hambúrgueres</a>
<a href="pagamento.php">Pagamento</a>
</nav>

<img src="imagens/logo.png" class="logo">

<div class="container">

<h2><?php echo $nome; ?></h2>

<p><?php echo $ingredientes; ?></p>

<h3>Preço: <?php echo $preco; ?></h3>

<a href="pagamento.php">
<button>Seguir para pagamento</button>
</a>

</div>

</body>
</html>