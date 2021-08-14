<h2>Listing Memos</h2>
<br>

<?php if ($memos): ?>
	<div class="table-responsive">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Title</th>
					<th>Body</th>
					<th></th>
				</tr>
			</thead>

			<tbody>
				<?php foreach ($memos as $item): ?>
					<tr>
						<td><?php echo $item->title; ?></td>
						<td><?php echo $item->body; ?></td>

						<td>
							<?php echo Html::anchor('admin/memo/view/'.$item->id, 'View'); ?> |
							<?php echo Html::anchor('admin/memo/edit/'.$item->id, 'Edit'); ?> |
							<?php echo Html::anchor('admin/memo/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>

	<?php echo $pagination ?>
<?php else: ?>
	<p>No Memos.</p>
<?php endif; ?>

<p>
	<?php echo Html::anchor('admin/memo/create', 'Add new Memo', array('class' => 'btn btn-success')); ?>
</p>
