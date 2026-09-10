<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Conscessionaria</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Luanete Turbinada</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">  
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Funcionário
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-funcionario">Cadastro</a></li>
            <li><a class="dropdown-item" href="?page=listar-funcionario">Listar</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Vendas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-venda">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=listar-venda">Listar</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Clientes
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-cliente">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=listar-cliente">Listar</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Marcas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-marca">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=listar-marca">Listar</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Modelos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-modelo">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=listar-modelo	">Listar</a></li>
          </ul>
        </li>

      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Pesquise" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Pesquisa</button>
      </form>
    </div>
  </div>
</nav>

	<div class="container mt-3">
		<div class="row">
			<div class="col">
				
				<?php
					switch (@$_REQUEST['page']) {
						// Funcionarios
						case 'cadastrar-funcionario':
						    include('cadastrar-funcionario.php');
							case 'listar-funcionario':
						include('listar-funcionario.php');
							break;
							case 'editar-funcionario':
						include('editar-funcionario.php');
							break;
							case 'salvar-funcionario':
						include('salvar-funcionario.php');
							break;

						// Vendas
						case 'cadastrar-venda':
						    include('cadastrar-venda.php');
							case 'listar-venda':
						include('listar-venda.php');
							break;
							case 'editar-venda':
						include('editar-venda.php');
							break;
							case 'salvar-venda':
						include('salvar-venda.php');
							break;

						// Clientes
						case 'cadastrar-cliente':
						    include('cadastrar-cliente.php');
							case 'listar-cliente':
						include('listar-cliente.php');
							break;
							case 'editar-cliente':
						include('editar-cliente.php');
							break;
							case 'salvar-cliente':
						include('salvar-cliente.php');
							break;

						// Marcas
						case 'cadastrar-marca':
						    include('cadastrar-marca.php');
							case 'listar-marca':
						include('listar-marca.php');
							break;
							case 'editar-marca':
						include('editar-marca.php');
							break;
							case 'salvar-marca':
						include('salvar-marca.php');
							break;

						// Modelos
						case 'cadastrar-modelo':
						    include('cadastrar-modelo.php');
							case 'listar-modelo':
						include('listar-modelo.php');
							break;
							case 'editar-modelo':
						include('editar-modelo.php');
							break;
							case 'salvar-modelo':
						include('salvar-modelo.php');
							break;

						
						default:
							print"<h1>Bem vindo ao Sistema da Luanete</h1>";
					}
				?>
		</div>
	<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>