<div class="container bg-white justify-center align-middle">

    <div class="card">
        <div class="card-header">
            <div class="card-title">
                <i class="fa fa-users"></i> Alunos
            </div>
        </div>
        <div class="p-3">
            <a href="/aluno/novo" id="btn-novo-aluno" class="btn btn-primary">
                <i class="fas fa-file-alt"></i> Novo
            </a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <th>RA</th>
                    <th>Nome</th>
                    <th>Turma</th>
                    <th>Período</th>
                    <th><i class="fa fa-cog"></i> Operação</th>
                </thead>
                <tbody id="tb-alunos"></tbody>
                <tfoot></tfoot>
            </table>
        </div>
    </div>
</div>

<script src="js/alunos.js"></script>
<script defer >exibirAlunos();</script>