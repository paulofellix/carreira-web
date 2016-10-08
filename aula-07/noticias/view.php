<?php require_once('controller.php'); ?>
<?php view($_GET['id']); ?>

<?php include(HEADER_TEMPLATE) ?>


<h2><?php echo utf8_encode($news['title']); ?></h2>

<blockquote>
	<h5><?php echo utf8_encode($news['abstract']); ?></h5>
</blockquote>

<p>
	<?php echo utf8_encode($news['article']); ?>
</p>

<p style="font-size:12px; font-weight: bold" class="pull-right">
	Por: <?php echo utf8_encode($news['author'].' - '.$news['date']); ?></span>
</p>