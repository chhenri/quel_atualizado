<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar produto</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>body { font-family: Arial }</style>
</head>
<body>
    <form action="salvar_produto.php" method="post" class="h-screen flex flex-col items-center justify-center gap-4">
        <div>
            <h2 class="text-3xl font-bold">Cadastrar produto</h2>
        </div>
        <div>
        <input placeholder="Digite o nome do produto" type="text" name="nome" class="w-50 px-4 py-2 border border-1 border-black rounded" >
        </div>
        <div>
        <input placeholder="Digite a quantidade recebida" type="number" name="quantidade" class="w-50 px-4 py-2 border border-1 border-black rounded" >
        </div>
        <div>
        <input placeholder="Digite o valor para venda (em $ Reais)"type="number" name="valor" class="w-50 px-4 py-2 border border-1 border-black rounded" >
        </div>
        <div>
            <button type="submit" class="px-4 py-2 bg-zinc-700 text-white rounded font-bold">Cadastrar</button>
        </div>
    </form>
</body>
</html>