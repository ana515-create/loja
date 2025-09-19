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
        }

        
        h1, h2, h3, h4, h5, h6, p, label {
            color: #fff !important;
        }

       
        .btn-primary {
            background-color: #e91e63 !important;
            border-color: #e91e63 !important;
        }
        .btn-primary:hover {
            background-color: #c2185b !important;
            border-color: #c2185b !important;
        }

       
        input.form-control {
            background-color: #fff !important;
            color: #333 !important;
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