<?php 
include 'cabecalho.php';
$id = $_GET['id'];
?>
<body>
   <style>
   
body {
    background-color: #0b1b3a; 
    font-family: Arial, sans-serif;
    color: #ffffff; 
}


.container {
    background-color: rgba(255, 255, 255, 0.05);
    padding: 25px;
    border-radius: 10px;
    margin-top: 40px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.4);
    max-width: 600px;
}


h2 {
    text-align: center;
    color: #ffffff; 
    margin-bottom: 20px;
}


.mb-3 {
    color: #ffffff; 
    font-size: 14px;
    font-weight: bold;
}


.form-control {
    border-radius: 8px;
    border: 1px solid #ffffff;
    background-color: rgba(255, 255, 255, 0.1);
    color: #ffffff;
}

.form-control::placeholder {
    color: #dddddd;
}


.btn-primary {
    background-color: #c71585; 
    color: #ffffff; 
    border: none;
    width: 100%;
    padding: 10px;
    font-size: 16px;
    font-weight: bold;
}

.btn-primary:hover {
    background-color: #a0126d; 
    color: #ffffff;
}

   </style>
    <div class="container">
      <h2>ATUALIZAÇÃO DE PRODUTO</h2>
      <?php
         require 'conexao.php';
        $sql = "SELECT * FROM produtos WHERE id= $id";
         $stmt = $pdo->query($sql);
         $produto = $stmt->fetch(PDO::FETCH_ASSOC);


         //echo "ID: " . $produto['id'] . "<br>";
         //echo "Nome: " . $produto['nome'] . "<br>";
         //echo "Preço: R$" . $produto['preco'] . "<br>";
         //echo "Estoque: " . $produto['estoque'] . "<br><br>";

      ?>

        <form action="#" method="POST">
            <div class="mb-3">
                Nome: <input value=
                "
                  <?php
                     echo $produto['nome'];
                  ?>
                " 
                type="text" name="produto" class="form-control" >
             </div>
             <div class="mb-3">
                Preço: <input value=
                "
                 <?php
                     echo $produto['preco'];
                  ?>
                "
                type="text" name="preco"  class="form-control" >
             </div>
              <div class="mb-3">
                Quantidade: <input value=
                "
                 <?php
                     echo $produto['quantidade'];
                  ?>
                "
                type="text" name="quantidade" class="form-control" >
             </div>
             <button type="submit" class="btn btn-primary">Atualizar</button>
          </form>
         </div>

         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
   
</body>