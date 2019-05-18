@extends('layout')

@section('cabecalho')
    Adicionar Barco
@endsection

@section('conteudo')
<form method="post">
    @csrsf
    <div class="form-group">
        <label for="nome" class="">Barco</label>
        <input type="text" class="form-control" name="nome" id="nome">
    </div>

    <div class="form-group">
        <label for="FormControlSelect2">Preço</label>
        <select multiple class="form-control" name = "preco" id="FormControlSelect2">
            <option>1000</option>
            <option>1500</option>
            <option>2000</option>
            <option>2500</option>
            <option>5000</option>
        </select>
    </div>

    <div class="form-group col-md-6">
            <label for="inputCity">Cidade</label>
            <input type="text" class="form-control" name = "cidade" id="inputCity">
    </div>

    <div class="form-group">
        <label for="FormControlSelect2">TamanhoDoBarco</label>
        <select multiple class="form-control" name="tamanho" id="FormControlSelect2">
            <option>10</option>
            <option>15</option>
            <option>20</option>
            <option>25</option>
            <option>30</option>
        </select>
    </div>

    <div class="form-group">
        <label for="ControlTextarea">DescriçãoDoBarco</label>
        <textarea class="form-contro1" name = "descricao" id="ControlTextarea" rows="3"></textarea>
    </div>
        <button class="btn btn-primary">Adicionar</button>
</form>
@endsection