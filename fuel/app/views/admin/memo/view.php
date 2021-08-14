<h2>Viewing #<?php echo $memo->id; ?></h2>
<br>

<dl class="dl-horizontal">
	<dt>Title</dt>
	<dd><?php echo $memo->title; ?></dd>
	<br>
	<dt>Body</dt>
	<dd><?php echo $memo->body; ?></dd>
	<br>
</dl>

<div class="btn-group">
	<?php echo Html::anchor('admin/memo/edit/'.$memo->id, 'Edit', array('class' => 'btn btn-warning')); ?>
	<?php echo Html::anchor('admin/memo', 'Back', array('class' => 'btn btn-default')); ?>
</div>
