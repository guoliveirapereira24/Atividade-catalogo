<?php

      require("C:/xampp/htdocs/gustavo/senai-icatalogo-mysqli-alunos/database/conexao.php");


      /*RECUPERA OS DADOS DE PRODUTO*/
      $idProduto = $_GET['id'];

      $idCategoria = $_GET['id'];

      $sql = "SELECT p.*, c.descricao FROM tbl_produto p
              INNER JOIN tbl_categoria c ON
              p.categoria_id = c.id;";

//TESTE DE SELEÇÃO DE DADOS:

//var_dump($resultado);exit;


$sqlCategoria =  "SELECT * FROM tbl_categoria";

$resultado = mysqli_query($conexao, $sql);

$produtos = mysqli_fetch_array($resultado);


  ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../styles-global.css" />
  <link rel="stylesheet" href="./editar.css" />
  <title>Editar Produtos</title>

</head>

<body>
 
  <div class="content">

    <section class="produtos-container">


  
      <main>

        <form class="form-produto" method="POST" action="../acoes.php" enctype="multipart/form-data">
         
          <input type="hidden" name="acao" value="editar" />
          
          <input type="hidden" name="idProduto" value="<?php echo $idProduto?>" />
          
          <h1>Editar Produto</h1>
          
          <ul>
      
          </ul>

          <div class="input-group span2">
            <label for="descricao">Descrição</label>
            <input type="text" name="descricao" value="<?php echo $produtos["descricao"] ?>" id="descricao" >
          </div>

          <div class="input-group">
            <label for="peso">Peso</label>
            <input type="text" name="peso" value="<?php echo number_format($produtos["peso"], 2, ",", ".")?>" id="peso" >
          </div>

          <div class="input-group">
            <label for="quantidade">Quantidade</label>
            <input type="text" name="quantidade" value="<?php echo $produtos["quantidade"]?>" id="quantidade" >
          </div>

          <div class="input-group">
            <label for="cor">Cor</label>
            <input type="text" name="cor" value="<?php echo $produtos["cor"]?>" id="cor" >
          </div>

          <div class="input-group">
            <label for="tamanho">Tamanho</label>
            <input type="text" value="<?php echo $produtos["tamanho"]?>" name="tamanho" id="tamanho">
          </div>

          <div class="input-group">
            <label for="valor">Valor</label>
            <input type="text" name="valor" value="<?php echo number_format($produtos["valor"])?>" id="valor" >
          </div>

          <div class="input-group">
            <label for="desconto">Desconto</label>
            <input type="text" name="desconto" value="<?php echo $produtos["desconto"]?>" id="desconto">
          </div>

          <div class="input-group">

            <label for="categoria">Categoria</label>

            <select id="categoria" name="categoria" >
              

              <option value=" ">SELECIONE</option>
    
                <option value=" " >
            
                <?php
                
                while ($categoria = mysqli_fetch_array($resultado)) {
                  ?>
              
              <option value="<?php echo $categoria["id"]?>"
              <?php echo $categoria["id"] == $produtos["categoria_id"] ? "selected" : "" ?>
                    >

              
              <?php echo $categoria["descricao"]?>

                </option>
                <?php } ?>
           </select>

          </div>

          <div class="input-group">
            <label for="categoria">Foto</label>
            <input type="file" name="foto" id="foto" accept="image/*" />
          </div>
         
          <button onclick="javascript:window.location.href = '../'">Cancelar</button>
          <button>Salvar</button>

        </form>

      </main>

    </section>

  </div>

  <footer>
    SENAI 2021 - Todos os direitos reservados
  </footer>
  
</body>

</html>