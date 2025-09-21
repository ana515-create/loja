<?php
   include 'cabecalho.php';
?>
  <style>
        
       body {
    background-color: #001f3d !important; 
    color: #fff !important;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    font-family: Arial, sans-serif;
}


.container {
    border: 2px solid #ffffff; 
    border-radius: 15px;
    padding: 40px;
    width: 70%; 
    max-width: 900px;
    text-align: center;
    background-color: #001f3d; 
    box-shadow: 0 4px 15px rgba(0,0,0,0.6);
}


h1, h2, h3, h4, h5, h6, p, label {
    color: #fff !important;
    margin-bottom: 15px;
}


.btn-primary {
    background-color: #c71585 !important; 
    border-color: #c71585 !important;
    color: #fff !important;
}

.btn-primary:hover {
    background-color: #a0126d !important;
    border-color: #a0126d !important;
    color: #fff !important;
}


.btn-danger, .btn-warning {
    font-weight: bold;
    padding: 10px 20px;
    border-radius: 8px;
}

        
    </style>
</head>
<body>
    <div class="container">
        <h1>Bliss Beauty</h1>
        <h2>Onde a beleza encontra o verdadeiro bem-estar.</h2>
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
        <a href= "form_cadastrar.php" type="a" class="btn btn-danger">Cadastrar</a>
        <a href= "listar.php" type="a" class="btn btn-warning">Listar</a>
        </div>
    </div>
     
    <?php
    ?>
</body>
</html>