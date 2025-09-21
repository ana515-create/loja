<?php
    include 'cabecalho.php';
?>
<body>    
    <style>
        
body {
    background-color: #0b1b3a; 
    color: #ffffff; 
    font-family: Arial, sans-serif;
}


.container {
    background-color: rgba(255, 255, 255, 0.05);
    padding: 20px;
    border-radius: 10px;
    margin-top: 30px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.4);
}


h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #ffb6c1; 
}


.table {
    background-color: rgba(255, 255, 255, 0.1);
    color: #ffffff;
    border-radius: 10px;
    overflow: hidden;
}

.table th {
    background-color: #1a2a52; /
    color: #ffb6c1; 
    text-align: center;
}

.table td {
    text-align: center;
}


.btn-success {
    background-color: #d63384;
    border: none;
}

.btn-success:hover {
    background-color: #b02a6f;
}

.btn-danger {
    background-color: #ff99cc; 
    border: none;
    color: #000;
}

.btn-danger:hover {
    background-color: #ff66b2;
    color: #fff;
}

    </style>
    <div class="container">
        <h2>LISTAGEM DE PRODUTOS</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOME</th>
                    <th scope="col">PREÇO</th>
                    <th scope="col">QUANTIDADE</th>
                    <th scope="col">OPÇÕES</th>
                </tr>
            </thead>
            <tbody>
     <?php
     require 'conexao.php';
     $sql = 'SELECT * FROM produtos';
     $stmt = $pdo->query($sql);
     while ($produto = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo"<td>". $produto['id']."</td>";
        echo"<td>" .$produto['nome']." </td>";
        echo"<td>". $produto['preco']."</td>";
        echo"<td>". $produto['quantidade']."</td>";
        echo"
        <td>
          <div class='btn-group' role='group'>
                            <a href='form_atualizar.php?id=". $produto['id']."' type='button' class='btn btn-success'>Atualizar</a>
                            <a href='#' type='button' class='btn btn-danger'>Apagar</a>
                        </div>
        </td>";
        echo "</tr>";
        }


?>

            </tbody>
        </table>
    </div>
</body>
</html>