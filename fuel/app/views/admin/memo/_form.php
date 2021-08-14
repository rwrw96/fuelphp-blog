<?php echo Form::open(); ?>
	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Title', 'title', array('class' => 'control-label')); ?>

			<?php echo Form::input('title', Input::post('title', isset($memo) ? $memo->title : ''), array('class' => 'form-control', 'placeholder' => 'Title')); ?>
		</div>

		<div class="form-group">
			<?php echo Form::label('Body', 'body', array('class' => 'control-label')); ?>

			<?php echo Form::textarea('body', Input::post('body', isset($memo) ? $memo->body : ''), array('class' => 'form-control', 'rows' => 8, 'placeholder' => 'Body')); ?>
		</div>

		<div class="form-group">
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>

			<div class="pull-right">
				<?php if (Uri::segment(3) === 'edit'): ?>
					<div class="btn-group">
						<?php echo Html::anchor('admin/memo/view/'.$memo->id, 'View', array('class' => 'btn btn-info')); ?>
						<?php echo Html::anchor('admin/memo', 'Back', array('class' => 'btn btn-default')); ?>
					</div>
				<?php else: ?>
					<?php echo Html::anchor('admin/memo', 'Back', array('class' => 'btn btn-link')); ?>
				<?php endif ?>
			</div>
		</div>
	</fieldset>


<?php echo Form::close(); ?>