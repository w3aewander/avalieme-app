<div class="container bg-white p-5">
<div class="card">
    <div class="card-header">
        <div class="card-title">
            <i class="far fa-file fa-fw"></i> Incluir novo aluno
        </div>
    </div>

    <div class="card-body">
        <div class="form">
            <!-- <form name="form-turma" action="" method="POST" onsubmit="return incluirAluno(evt,this);"> -->
                <div class="form-group">
                    <label for="ra">RA</label>
                    <input type="text" id="ra" value="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" value="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="turma">Turma</label>
                    <input type="text" id="turma" value="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="periodo">Periodo</label>
                    <input type="text" id="periodo" value="" class="form-control">
                </div>                

                <div class="btn-group py-3">
                    <button type="button" onclick="return incluirAluno();" class="btn btn-danger"><i class="fas fa-plus"></i> Incluir</button>
                    <button type="reset" class="btn btn-warning"><i class="fas fa-recycle"></i> Cancelar</button>
                </div>
            <!-- </form> -->
        </div>
    </div>
</div>
</div>
