<?php
    include "cabecalho.php"
?>
<body>
    <div class="container">
        <h2>CADASTRO DE PRODUTO</h2>
        <form action="inserir.php" method="POST">
            <div class="mb-3">
                <input type="text" name="produto" class="form-control" placeholder="Digite o nome do produto">
            </div>
            <div class="mb-3">
                <input type="text" name="preco" class="form-control" placeholder="Digite o preço do produto">
            </div>
            <div class="mb-3">
                <input type="text" name="quantidade" class="form-control" placeholder="Digite a quantidade do produto">
            </div>
            <button type="submit">CADASTRAR</button>   
        </form>
        <a href = "index.php"type="button" class="btn btn-danger">voltar</a>
    </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>
</html>