<h2>Viewing <span class='muted'>#<?php echo $student->id; ?></span></h2>

<p>
	<strong>Name:</strong>
	<?php echo $student->name; ?></p>

<?php echo Html::anchor('student/edit/'.$student->id, 'Edit'); ?> |
<?php echo Html::anchor('student', 'Back'); ?>