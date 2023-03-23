@extends('layouts.app')
@section('conteudo')
<main>



	

<div class="container col-xl-10 col-xxl-8 px-4 py-5">
  <div class="row align-items-center g-lg-5 py-5">
    <div class="col-lg-7 text-center text-lg-start">
        <i class='fas fa-code border border-1 rounded-3 '  style='font-size:36px; padding:5px; background-color: #20ac6b; color: white; margin-right: 5px;' ></i>
      <h1 class="display-4 fw-bold lh-1 mb-3">NUDEV</h1>
      <p class="col-lg-10 fs-4">NUCLEO DE DESENVOLVIMENTO</p>
       <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <p ><a class="btn btn-outline-secondary btn-lg px-4  " style="margin-bottom: 20px; text-decoration: none; " href="#sobre">SOBRE O PROJETO</a></p>
      </div>
    </div>

    <div class="col-md-10 mx-auto col-lg-5">
      <form class="p-4 p-md-5 border rounded-1 bg-light">
          <p class="col-lg-10 fs-4 text-center ">AUTENTICAÇÃO DE ACESSO</p>
        <div class="form-floating mb-3">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">CPF</label>
        </div>
        <div class="form-floating mb-3">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">SENHA</label>
        </div>
        
        
        <p ><a class="w-100 btn btn-lg btn-success" style="margin-bottom: 20px; text-decoration: none; " href="home.html">ENTRAR</a></p>
        
        
      </form>
    </div>
  </div>
</div>

<div class="b-example-divider" id="sobre"></div>
<div class="fundo">
<div class="container " >
    <div class="px-4 py-5 my-5 text-center">
  <img class="d-block mx-auto mb-4" src="iflogo.png" alt="" width="100" height="124">
  <h1 class="display-5 fw-bold">SISTEMA NUDEV</h1>
  <div class="col-lg-6 mx-auto">
    <p class="lead mb-4">É um sistema criado por estagiários do Instituto Federal de Corumbá MS, para auxiliar alunos do instituto no período de estágio.</p>
   
  </div>
</div>
</div>
</div>
</main>
@endsection