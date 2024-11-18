<?php
include 'config.php';
include 'read.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<header class="w-full flex items-center justify-between py-6 px-8 bg-zinc-200">
      <div>
      <img src="logomarca.jpg" width="150" height="100" alt="100">

      </div>
  <div>
            <h2 class="font-bold text-2xl text-black">Makes By Cris Martins</h2>
        </div>
        <nav>
            <ul class="flex gap-4 items-center">
                <li><a href="index.php" class="font-bold text-black">Home</a></li>
                <li><a href="cadprod.php" class="font-bold text-black">Cadastrar produto</a></li>
               
            </ul>
        </nav>
    </header>
<main class="h-full flex items-center justify-center mt-6">
    <?php

            while ($produto = mysqli_fetch_assoc($listarSQL)) {
            
            ?>
        <div class="card w-96 p-8 bg-zinc-300 flex flex-col gap-4">
            <div>
                <p><?php echo $produto['nome'] ?></p>
            </div>
            <div>
                <p>
                <?php echo $produto['quantidade'] ?>   
            </p>
            </div>
            <div>
                <p>
                <?php echo $produto['valor'] ?>   
            </p>
            </div>
           
            
            <div>
            <a href="delete.php?id_produto=<?php echo $produto['id_produto']; ?>">Excluir</a>
            <a href="editar-produto.php?id_produto=<?php echo $produto['id_produto']; ?>">Atualizar</a>
            </div>
       
        </div>
    </div> 
                <?php
            }
          
                ?>
       
</main>
</body>
</html>