<?php require_once 'config.php' ?>

<?php include(HEADER_TEMPLATE); ?>

<h1>Dashboard</h1>

<div class="row">
  <div class="col-xs-6 col-sm-3 col-md-2">
    <a href="noticias/add.php" class="btn btn-primary">
      <div class="row">
        <div class="col-xs-12 text-center">
          <i class="fa fa-plus fa-5x"></i>
        </div>
        <div class="col-xs-12 text-center">
          <p>Nova Noticia</p>
        </div>
      </div>
    </a>
  </div>

  <div class="col-xs-6 col-sm-3 col-md-2">
    <a href="noticias" class="btn btn-default">
      <div class="row">
        <div class="col-xs-12 text-center">
          <i class="fa fa-newspaper-o fa-5x"></i>
        </div>
        <div class="col-xs-12 text-center">
          <p>Noticias</p>
        </div>
      </div>
    </a>
  </div>
</div>