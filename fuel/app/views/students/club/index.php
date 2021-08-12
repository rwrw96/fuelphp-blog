<h2>Listing <span class='muted'>Students_clubs</span></h2>
<br>
<?php if ($students_clubs): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Student id</th>
			<th>Club id</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($students_clubs as $item): ?>		<tr>

			<td><?php echo $item->student_id; ?></td>
			<td><?php echo $item->club_id; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('students/club/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('students/club/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('students/club/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Students_clubs.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('students/club/create', 'Add new Students club', array('class' => 'btn btn-success')); ?>

</p>
