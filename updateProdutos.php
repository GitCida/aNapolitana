<?php
include_once 'conexao.php'; 
include_once 'protection.php';

$idProduto = $_POST['id_produto'];
$nomeProduto = $_POST['nomeProduto'];
$categoria = $_POST['id_categoria'];
$preco = $_POST['preco'];
$marca = $_POST['id_marca'];

if (!empty($idProduto) && !empty($nomeProduto) && !empty($categoria) && !empty($preco) && !empty($marca)) {
    try {
        $stmt = $conexao->prepare("UPDATE produtos SET nome_produto = ?, id_categoria = ?, preco = ?, id_marca = ? WHERE id_produto = ?");
        $stmt->execute([$nomeProduto, $categoria, $preco, $marca]);
        header('Location: readProdutos.php?msg=Produto atualizado com sucesso!');
        
    } catch (PDOException $erro) {
            header('Location: formUpdateProdutos.php?msg=Erro ao atualizar produto.');
            exit;
        }
} else {
    header('Location: formUpdateProdutos.php?msg=Preencha todos os campos obrigatórios.');
}
?>