<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Documento HTML</title>
</head>
<body>
    <table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Preço de Compra</th>
        <th>Preço de Venda</th>
        <th>Editar</th>
        <th>Deletar</th>
    </tr>
    @foreach ($produtos as $produto)
        <tr>
            <td>{{$produto->id}}</td>
            <td>{{$produto->nome}}</td>
            <td>{{$produto->preco_compra}}</td>
            <td>{{$produto->preco_venda}}</td>
            <td><a href="{{route('produtos.editar', ['produto' => $produto])}}">Editar</a></td>
            <td>
                <form method="post" action="{{route('produtos.deletar', ['produto' => $produto])}}">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Excluir"/>
                </form>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>