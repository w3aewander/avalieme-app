<div class="container bg-white p-5 ">
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                <i class="fa fa-building"></i> Cadastro de YYY Escolas
            </div>
        </div>
        <div class="card-body">
          <table class="table table-hover table-info table-striped">
              <thead>
                  <tr>
                      <td>ID</td>
                      <td>Nome</td>
                      <td>Opções</td>
                  </tr>
              </thead>
              <tbody id="tb-escolas">
                  <tr>
                      <td colspan="3">
                          Nenhum registro carregado.
                      </td>
                  </tr>
              </tbody>
          </table>
        </div>
    </div>
</div>

<script src="js/escolas.js"></script>
<script defer>buscarEscolas();</script>
