<h2>Viewing <span class='muted'>#<?php echo $students_club->id; ?></span></h2>

<p>
	<strong>Student id:</strong>
	<?php echo $students_club->student_id; ?></p>
<p>
	<strong>Club id:</strong>
	<?php echo $students_club->club_id; ?></p>

<?php echo Html::anchor('students/club/edit/'.$students_club->id, 'Edit'); ?> |
<?php echo Html::anchor('students/club', 'Back'); ?>