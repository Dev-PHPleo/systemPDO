<?php

	include 'conexao.php';

	$nroproduto = $_POST['nroproduto'];
	$nomeproduto = $_POST['nomeproduto'];
	$id_categoria = $_POST['categoria'];
	$quantidade = $_POST['quantidade'];
	$fornecedor = $_POST['fornecedor'];


//$res = $pdo->prepare("INSERT INTO estoque (nroproduto, nomeproduto, categoria, quantidade, fornecedor) VALUES ('$nroproduto', '$nomeproduto','$categoria',$quantidade,'$fornecedor')");

//$pdo->query("INSERT INTO estoque (nroproduto, nomeproduto, categoria, quantidade, fornecedor) VALUES ('nroproduto', 'nomeproduto','categoria',quantidade,'fornecedor')");

//$res->bindValue()$res->bindValue()

/*$inserir = mysqli_query($conexao,$sql);*/

$pdo->query("INSERT INTO estoque (nroproduto, nomeproduto, id_categoria, quantidade, fornecedor) VALUES ('$nroproduto', '$nomeproduto', '$id_categoria', '$quantidade', '$fornecedor')");
//$buscar->bindValue($nroproduto, $nomeproduto, $categoria, $quantidade, $fornecedor)
//$buscar->execute();

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script type="text/javascript">
	$(function(){
		Swal.showLoading()
		
		setTimeout(function(){
			Swal.fire({
			icon: 'success',
			title: 'Sucesso',
			text: 'Produto adicionado com sucesso',
			allowOutsideClick: false,
			timer: 1500,
			timerProgressBar: true,
			showConfirmButton: false
		}).then((result) => {
  			window.location = 'index.php';
		}) 
		}, 1000);
	})
</script>

	




