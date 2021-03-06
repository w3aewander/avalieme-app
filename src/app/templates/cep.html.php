<div class="container bg-white p-5">

    <div class="jumbotron px-4 mb-4">
        <h2 class="">Buscar endereço do CEP informado</h2>
    </div>
    <div class="input-group">
        <div class="input-group-append">
            <label for="txt-cep" class="input-group-text">CEP</label>
        </div>

     
        <input type="search" class="form-control" id="txt-cep" name="txt-cep" placeholder="informe o cep">
        <button type="button"onclick="buscarEndereco();" class="btn btn-primary btn-sm" id="btn-buscar-cep"><i class="fa fa-search fa-fw"></i>
            Buscar endereço
        </button>
    

    </div>

    <hr>

    <div class="row">
        <div class="form-group col-md-4">
            <label for="tipo_logradouro">Tipo logradouro</label>
            <input type="text" class="form-control" id="tipo-logradouro">
        </div>
        <div class="form-group col-md-8">
            <label for="logradouro">Logradouro</label>
            <input type="text" class="form-control" id="logradouro">
        </div>
    </div>


    <div class="row">
        <div class="form-group col-md-5">
            <label for="bairro">Bairro</label>
            <input type="text" class="form-control" id="bairro">
        </div>
        <div class="form-gorup col-md-5">
            <label for="cidade">Cidade</label>
            <input type="text" class="form-control" id="cidade">
        </div>
        <div class="form-group col-md-2">
            <label for="uf">Estado</label>
            <input type="text" class="form-control" id="uf">
        </div>
    </div>

    <div class="text-danger my-4" id="resultado">
    </div>

    <table class="table table-hover table-striped" width="80%">
        <thead>
            <tr>
                <td>Tipo Log.</td>
                <td>Logradouro</td>
                <td>Bairro</td>
                <td>Cidade</td>
                <td>Uf</td>
            </tr>
        </thead>
        <tbody id="tbody-endereco">

        </tbody>
    </table>

</div>