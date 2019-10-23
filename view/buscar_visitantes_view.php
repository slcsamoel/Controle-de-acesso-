<?php

require_once "../cabecalho_aux.php"; ?>
<title>buscar_visitantes</title>

<!-- Bootstrap -->
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../css/estilo.css" rel="stylesheet">
<div class="container">
  <div class="pager-header">
    <h1>Buscar Visitantes</h1>
  </div>
  <div class="row">
    <div class="col-sm-12">

      <form class="form-horizontal" action="../controller/buscar_visitante.php" method="post" >

        <div class="panel panel-primary">

          <div class="panel-body">
            <div class="form-group">

              <div class="col-md-11 control-label">

                <label class="col-md-2 control-label" for="cpf">CPF <h11></h11></label>
                <div class="col-md-2">
                  <input id="cpf" name="cpf" placeholder="Apenas números" class="form-control input-md" type="text" maxlength="11" pattern="[0-9]+$">
                </div>


                <label class="col-md-2 control-label" for="nome">Nome<h11></h11></label>
                <div class="col-md-4">
                  <input id="nome" name="nome" class="form-control input-md" type="text">
                </div>

              </div>
            </div>

            <div class="col-md-8">
              <div class="col-md-6">
              </div>
            </div>

            <div class="col-md-2">
              <button type="submit" class="btn btn-primary">Buscar</button>
            </div>

          </div>


        </div>

      </form>
    </div>

  </div>

  <?php require_once "../rodape.php"; ?>