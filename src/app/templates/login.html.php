<style>
    label{
        font-weight: bold;
        text-transform: capitalize;
    }
   .container{
     width: 450px;
     height: 600px;
   }
 </style>

<div class="container bg-white p-5">

<div class="card">
    <div class="card-header bg-secondary text-white text-bold">
        <div class="card-title">
            <i class="far fa-user fa-fw"></i> Login
        </div>
    </div>

    <div class="card-body">
        <div class="form">
            <!-- <form name="form-turma" action="" method="POST" onsubmit="return incluirAluno(evt,this);"> -->
                <div class="form-group py-3">
                    <label for="email">email</label>
                    <input type="email" id="email" value="" class="form-control">
                </div>
                <div class="form-group py-3">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" value="" class="form-control">
                </div>
                <div class="form-group py-3 ">
                    <label for="esqueci_senha" class="p-1">
                        <a href="/login/recuperar/senha" class="btn-link" id="esqueci_senha" > Esqueci minha senha</a>
                    </label>
                </div>

            <!-- </form> -->
        </div>
    </div>
    <div class="card-footer">
        <div class="d-flex justify-content-center w-100">
            <button type="button" onclick="autenticar();" class="btn btn-block btn-success w-100"><i class="fas fa-unlock"></i> Entrar</button>
        </div>
    </div>

</div>
</div>

<script>
   const autenticar = () => {
      const email = document.getElementById("email").value
      const senha = document.getElementById("senha").value

      fetch ("/login/auth", 
                { 
                   method: 'POST', 
                   headers: {'Content-type':'application/x-www-form-urlencoded'},
                   body: new URLSearchParams({
                                'email': email,
                                'senha': senha
                        }), 
                })
                .then( resp => {
                    resp.json().then( resp => {
                        if ( resp.success ){
                            location.href = "/";
                        }
                    })
                    
                })
                .catch(e => console.log(e))
   }
</script>