<h2>Viewing <span class='muted'>#<?php echo $club->id; ?></span></h2>

<p>
	<strong>Name:</strong>
	<?php echo $club->name; ?></p>

<?php echo Html::anchor('club/edit/'.$club->id, 'Edit'); ?> |
<?php echo Html::anchor('club', 'Back'); ?>