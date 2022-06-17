document.addEventListener('DOMContentLoaded', (event) => {
    document.querySelector("#btn-toggle-menu").addEventListener("click", (evt)=>{
       let statusDisplay = document.getElementById("menu-lateral").style.display

       if ( statusDisplay === "none")
            document.getElementById("menu-lateral").style.display = "block"
       else
            document.getElementById("menu-lateral").style.display = "none"
    })
    
    loadMenu()

})

const loadMenu = () => {
    const menu = document.getElementById("menu-lateral")
    menu.innerHTML = "<div class='list-group-item'>Carregando opções do menu</div>"
    fetch("/api/menulateral/carregar")
    .then( resp => resp.json()   
    .then( resp => {

        menu.innerHTML = ""
        //console.log(resp.menuopt)

        menu.innerHTML += `<div class='list-group-item'>
                        <a class="btn btn-primary text-start btn-block" href="/">
                        <i class="fa fa-home"></i>
                        <span class="px-2">Inicio</span>
                        </a>
                   </div>`

        resp.menuopt.forEach(m => {
             menu.innerHTML += `<div class='list-group-item'>
                                   <a href="${m.link}" class="${m.class}" title="${m.title}">
                                   ${m.icon}
                                   <span class="px-2">${m.action.toUpperCase()}</span>
                                   </a>
                                </div>`
        })
      }) 
    )
}

const loadPage = (page) => {
    if (page === "/" || page === "" ) return false;

   const cnt =  document.getElementById('content')
   const header = {"Content-type": "text/html"}
   fetch(page, {header: header, method: 'GET'}).then( resp => {
       resp.text()
       .then(r=>cnt.innerHTML = r)
   })
}

const loadHomePage = () => {
    location.href="/"
}

const buscarEndereco = () => {

    const cep = document.getElementById("txt-cep").value

    const btnBuscarCep = document.getElementById("btn-buscar-cep")

    btnBuscarCep.innerHTML = `<i class="fas fa-spinner fa-spin"></i> Buscando cep...`
    btnBuscarCep.setAttribute("disabled", true)

    document.getElementById("resultado").textContent = ""

    const uri = `http://cep.republicavirtual.com.br/web_cep.php?cep=${cep}&formato=json`
    fetch(uri).then(r => r.json().then(r => {

        //console.log(r)
        document.getElementById("tipo-logradouro").value = r.tipo_logradouro
        document.getElementById("logradouro").value = r.logradouro
        document.getElementById("bairro").value = r.bairro
        document.getElementById("cidade").value = r.cidade
        document.getElementById("uf").value = r.uf

        document.getElementById("tbody-endereco")
            .innerHTML = `<tr>
                                     <td>${r.tipo_logradouro}</td>
                                     <td>${r.logradouro}</td>
                                     <td>${r.bairro}</td>
                                     <td>${r.cidade}</td>
                                     <td>${r.uf}</td>
                                    </tr>`

        if (r.resultado === "0") {
            document.getElementById("resultado").textContent = "Endereço não localizado."
        }
        btnBuscarCep.innerHTML = `<i class="fa fa-search fa-fw"></i> Buscar cep`
        btnBuscarCep.removeAttribute("disabled")

    }))

}