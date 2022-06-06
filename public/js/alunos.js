const exibirAlunos = () => {

    const dados = fetch("data/alunos.json")
    const tbAlunos = document.getElementById("tb-alunos")

    dados.then( d => {
        resp = d.json()
        resp.then ( r => {
            r.alunos.forEach(a => {
                
                const tr = document.createElement("tr")
                const tdRA = document.createElement("td")
                const nodeRA = document.createTextNode(a.ra)

                const tdNome = document.createElement("td")
                const nodeNome = document.createTextNode(a.nome)

                const tdTurma = document.createElement("td")
                const nodeTurma = document.createTextNode(a.turma)

                const tdPeriodo = document.createElement("td")
                const nodePeriodo = document.createTextNode(a.periodo)

                const opt = document.createElement("td")
                btnEditar = document.createElement("a")
                btnEditar.setAttribute("href", "#")
                btnEditar.classList.add("btn")
                btnEditar.classList.add("btn-primary")
                btnEditar.classList.add("btn-sm")
                btnEditar.innerHTML = "<i class='fa fa-file-edit'></i>&nbsp;"
                btnEditar.appendChild(document.createTextNode("Editar"))

                opt.appendChild(btnEditar)

                tdRA.appendChild(nodeRA)
                tdNome.appendChild(nodeNome)
                tdTurma.appendChild(nodeTurma)
                tdPeriodo.appendChild(nodePeriodo)
                

                tr.appendChild(tdRA)
                tr.appendChild(tdNome)
                tr.appendChild(tdTurma)
                tr.appendChild(tdPeriodo)
                tr.appendChild(opt)

                tbAlunos.append(tr)

            });
        })
    })

}

const incluirAluno = ( ) => {

    const objAluno = {
        "ra": document.getElementById("ra").value,
        "nome": document.getElementById("nome").value,
        "turma": document.getElementById("turma").value,
        "periodo": document.getElementById("periodo").value
    }

    fetch("data/alunos.json", { method: 'POST', body: objAluno }).then( r => {
        console.log(r)
        
        alert("Processo concluído.")
    })

    return false;
}
