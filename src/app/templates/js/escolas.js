    const buscarEscolas = () => {
        
        const tbEscola = document.getElementById("tb-escolas")
        
        tbEscola.innerHTML = `<tr><td colspan="4">Carregando registros...</td></tr>`

         fetch("/api/escolas/listar").then(
            resp => resp.json()
            .then( resp => {
                console.log(resp.escolas)
                 /* resp.escolas.forEach(el => {
                    tbEscola.innerHTML += `<tr><td>${el.id}</td><td>${e.nome}</td><button class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Editar<td></td></tr>`
                }) */
            }) 
         )
    }
            