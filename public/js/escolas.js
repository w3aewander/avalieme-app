    const buscarEscolas = () => {
        
        const tbEscola = document.getElementById("tb-escolas")
        
        tbEscola.innerHTML = `<tr><td colspan="4">Carregando registros...</td></tr>`

         fetch("/api/escolas/listar").then(
            resp => resp.json()
            .then( resp => {
                tbEscola.innerHTML = ``
                 resp.escolas.forEach(el => {
                    tbEscola.innerHTML += `<tr>
                                <td width="50">${el.id}</td>
                                <td width="*">${el.nome}</td>
                                <td width="100">
                                    <button class="btn btn-primary btn-sm">
                                    <i class="fa fa-edit"></i> Editar
                                </td></tr>`
                }) 
            }) 
         )
    }
            