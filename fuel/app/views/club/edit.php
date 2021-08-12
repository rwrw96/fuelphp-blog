<h2>Editing <span class='muted'>Club</span></h2>
<br>

<?php echo render('club/_form'); ?>
<p>
	<?php echo Html::anchor('club/view/'.$club->id, 'View'); ?> |
	<?php echo Html::anchor('club', 'Back'); ?></p>
