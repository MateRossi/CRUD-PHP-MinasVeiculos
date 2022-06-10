<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Novo Veiculo</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="topDiv"><h1>Minas Veiculos</h1></div>
    <div id="header"><h3>Cadastrar novo veículo:</h1></div> 
        <form action="{{route('salvar_veiculo')}}" method="post">
            @csrf
            <div><label for="modelo">Modelo:</label><input type="text" name="modelo" id="modelo"></div>
            <div><label for="marca">Marca:</label><input type="text" name="marca" id="marca"></div>
            <div><label for="ano">Ano:</label><input type="text" name="ano" id="ano"></div>
            <div><label for="cor">Cor:</label><input type="text" name="cor" id="cor"></div>
            <div><label for="precoTabela">FIPE($):</label><input type="text" name="precoTabela" id="precoTabela"></div>
            <input type="submit" value="Salvar">
            <input type="button" value="Cancelar" onclick="javascript:history.back()" id="button_cancel">
        </form>
</body>
</html>