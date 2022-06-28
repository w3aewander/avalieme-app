<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="author" content="Wanderlei Silva do Carmo">
    <meta name="version" content="0.20220603.alpha">
    <meta name="licence" content="free">

    <title>AVALIEME</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        
    <link rel="stylesheet" href="./css/app.css">
</head>

<body>

<div class="jumbotron bg-blue-100 p-4 mb-4">
        <h1>AVALIEME - APP</h1>
        <p>Avaliação do aluno - ALPHA</p>
    </div>

    <div class="b-menu">
       <button class="btn btn-primary btn-sm" id="btn-toggle-menu">
           <i class="fa fa-bars fa-2x"></i>
        </button>
    </div>

    <div class="d-flex px-1 w-100">
        
        <div class="list-group" id="menu-lateral">
            <div class="list-group-item"></div>
        </div>
        
        <div class="container">
            <div class="justify-center align-middle">
                <session id="main" class="py-5">
                    <main class="content imagem-pagina-inicial" id="content" name="content">

                   
