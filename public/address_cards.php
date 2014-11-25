<?php foreach ($rows as $row) : ?>

<div class="container card">
	<div class="row">
		<div class="col-md-2">
			<img id="person-image-<?= $row['p_id'] ?>" src="<?= $row['image'] ?>" height="100px" width="100px" class="img-circle">
			<a href="#" data-edit-address="<?= $row['p_id']; ?>" class="edit-person-btn">
				<span class="glyphicon glyphicon-pencil"></span>
			</a>
		</div>
		<div class="col-md-6 col-md-offset-3">
			<h3 id="person-name-<?= $row['p_id'] ?>"><?= $row['first_name'] ?> <?= $row['last_name'] ?></h3>
			<div id="person-ph_num-<?= $row['p_id'] ?>"><?= $row['ph_num'] ?></div>
			<div><?= $row['street']?></div>
			<div><?= $row['city']?>, <?= $row['state'] ?></div>
			<div><?= $row['zip'] ?></div>
		</div>
	</div> <!-- cardrow -->
</div> <!-- container card -->
<?php endforeach; ?>
