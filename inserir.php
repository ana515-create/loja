<?php
require 'conexao.php';
$nome = $_POST['produto'];
$preco =  $_POST['preco'];
$quantidade =  $_POST['quantidade'];


$sql = "INSERT INTO produtos (nome, preco, quantidade) VALUES (:nome, :preco, :quantidade)";


$stmt = $pdo->prepare($sql);


$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':preco', $preco);
$stmt->bindParam(':quantidade', $quantidade);


if ($stmt->execute()) {
echo "Produto inserido com sucesso!";
} else {
echo "Erro ao inserir produto.";
}
?>

<style>
    
body {
    background-color: #001f3d; 
    color: #ffffff; 
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}


.container {
    max-width: 900px;
    margin: 50px auto;
    padding: 30px;
    background-color: #001f3d;
    border-radius: 15px;
    border: 2px solid #ffffff; 
    text-align: center;
    box-shadow: 0 4px 15px rgba(0,0,0,0.6);
}

h1, h2, h3, h4, h5, h6, p, label {
    color: #ffffff;
    margin-bottom: 15px;
}

.form-control {
    border-radius: 8px;
    border: 1px solid #ffffff;
    background-color: rgba(255, 255, 255, 0.1);
    color: #ffffff;
    padding: 10px;
    width: 100%;
    margin-bottom: 15px;
}


.btn-primary, .btn {
    background-color: #c71585; 
    border: none;
    color: #ffffff; 
    padding: 10px 20px;
    font-size: 16px;
    font-weight: bold;
    border-radius: 8px;
    cursor: pointer;
    margin: 5px;
}

.btn-primary:hover, .btn:hover {
    background-color: #a0126d; 
    color: #ffffff;
}

</style>