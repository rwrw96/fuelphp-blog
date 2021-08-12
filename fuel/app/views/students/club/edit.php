<h2>Editing <span class='muted'>Students_club</span></h2>
<br>

<?php echo render('students/club/_form'); ?>
<p>
	<?php echo Html::anchor('students/club/view/'.$students_club->id, 'View'); ?> |
	<?php echo Html::anchor('students/club', 'Back'); ?></p>
