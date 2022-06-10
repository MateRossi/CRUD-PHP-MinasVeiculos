<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veiculos Cadastrados</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="topDiv"><h1>Minas Veiculos</h1></div>
    <div id="header"><h3>Veiculos cadastrados:</h1></div>   
    <table id="list_veiculos">
        <tr><th>Modelo</th><th>Marca</th><th>Ano</th><th>Cor</th><th>FIPE($)</th><th colspan=2><a href="novo"
                title="Novo Veiculo"><button id="button_new">Novo Veiculo</button></a></th></tr>
        @foreach($veiculos as $veiculo)
            <tr>
                <td>{{$veiculo->modelo}}</td>
                <td>{{$veiculo->marca}}</td>
                <td>{{$veiculo->ano}}</td>
                <td>{{$veiculo->cor}}</td>
                <td>{{$veiculo->precoTabela}}</td>
                <td><a href="{{route('editar_veiculo', ['id'=>$veiculo->id])}}"
                title="Editar veiculo {{$veiculo->modelo}}"><button id="button_edit">Editar</button></a></td>
                <td><a href="{{route('excluir_veiculo', ['id'=>$veiculo->id])}}" 
                title="Excluir veiculo {{$veiculo->modelo}}"><button id="button_delete">Excluir</button></a></td>
            </tr>
            @endforeach
    </table>  
</body>
</html>