<?php 
include 'cabecalho.php';

?>

<body>
    <div class="container">
      <h2>CADASTRO DE PRODUTO</h2>
        <form action="#" method="POST">
         <head>
        <style>
        /* Fundo azul escuro para toda a página */
        body {
            background-color: #001f3d !important;
            color: #fff !important;
        }

        /* Deixa todos os textos (ex: h2) brancos */
        h1, h2, h3, h4, h5, h6, p, label {
            color: #fff !important;
        }

        /* Botão rosa */
        .btn-primary {
            background-color: #e91e63 !important;
            border-color: #e91e63 !important;
        }
        .btn-primary:hover {
            background-color: #c2185b !important;
            border-color: #c2185b !important;
        }

        /* Inputs com fundo branco e texto escuro */
        input.form-control {
            background-color: #fff !important;
            color: #333 !important;
        }
    </style>
</head>
            <div class="mb-3">
                Nome: <input type="text" name="name"  class="form-control">
             </div>
             <div class="mb-3">
                Preço: <input type="text" name="preco"  class="form-control">
             </div>
              <div class="mb-3">
                Quantidade: <input type="text" name="quantidade" class="form-control">
             </div>
             <button type="submit" class="btn btn-primary">Atualizar</button>
          </form>
         </div>
      

         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
   
</body>