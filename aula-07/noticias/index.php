<?php require_once('controller.php') ?>
<?php index(); ?>
<?php include(HEADER_TEMPLATE) ?>

<h1>Noticias</h1>


<a href="add.php" class="btn btn-primary">Novo</a>
<hr>

<table class="table table-bordered table-hover table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th width="30%">Autor</th>
			<th>Data</th>
			<th>Foto</th>
			<th>Título</th>
			<th>Opções</th>
		</tr>
	</thead>
	<tbody>
		<?php if($news): ?>
			<?php foreach($news as $item): ?>
				<tr>
					<td><?php echo $item['id']; ?></td>
					<td><?php echo utf8_encode($item['author']); ?></td>
					<td><?php echo $item['date']; ?></td>
					<td><?php echo $item['photo']; ?></td>
					<td><?php echo utf8_encode($item['title']); ?></td>
					<td class="action">
						<a href="view.php?id=<?= $item['id']; ?>" class="btn btn-sm btn-success">
							Visualizar
						</a>
						<a href="edit.php?id=<?= $item['id']; ?>" class="btn btn-sm btn-warning">
							Editar
						</a>
						<a href="delete.php?id=<?= $item['id']; ?>" class="btn btn-sm btn-danger">
							Excluir
						</a>
					</td>
				</tr>
			<?php endforeach; ?>
		<?php else: ?>
			<tr>
				<td colspan="6">Nenhum registro encontrado</td>
			</tr>
		<?php endif; ?>
	</tbody>
</table>