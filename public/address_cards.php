<?php foreach ($rows as $row) : ?>

<div class="container card">
	<div class="row">
		<div class="col-md-4">
			<img id="person-image-<?= $row['p_id'] ?>" src="<?= $row['image'] ?>" height="100px" width="100px" class="img-circle">
			<a href="#" data-edit-address="<?= $row['add_id']; ?>" data-edit-person="<?= $row['p_id']; ?>" class="edit-person-btn">
				<span class="glyphicon glyphicon-pencil"></span>
			</a>
		</div>
		<div class="col-md-8">
			<h3 id="person-name-<?= $row['p_id'] ?>"><?= $row['first_name'] ?> <?= $row['last_name'] ?></h3>
			<div id="person-ph_num-<?= $row['p_id'] ?>"><?= $row['ph_num'] ?></div>
			<div id="person-street-<?= $row['p_id'] ?>"><?= $row['street']?></div>
			<div id="person-city-<?= $row['p_id'] ?>"><?= $row['city']?></div>
			<div id="person-state-<?= $row['p_id'] ?>"><?= $row['state']?></div>
			<div id="person-zip-<?= $row['p_id'] ?>"><?= $row['zip']?></div>
		</div>
	</div> <!-- cardrow -->
</div> <!-- container card -->
<?php endforeach; ?>
