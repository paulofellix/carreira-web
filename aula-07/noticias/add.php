<?php require_once('controller.php') ?>
<?php add(); ?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Nova Notícia</h2>
<form action="add.php" method="post">
	<!-- area de campos do form -->
	<hr />
	<div class="row">
	<div class="form-group col-md-12">
			<label for="author">Autor</label>
			<input type="text" class="form-control" name="news['author']">
		</div>	

		<div class="form-group col-md-12">
			<label for="name">Título</label>
			<input type="text" class="form-control" name="news['title']">
		</div>
		<div class="form-group col-md-12">
			<label for="name">Resumo</label>
			<textarea class="form-control" name="news['abstract']" rows="10"></textarea>
		</div>
		<div class="form-group col-md-12">
			<label for="name">Texto</label>
			<textarea class="form-control" name="news['article']" rows="10"></textarea>
		</div>
		<div class="form-group col-md-12">
			<input type="submit" class="btn btn-primary">
		</div>
	</div>
</form>