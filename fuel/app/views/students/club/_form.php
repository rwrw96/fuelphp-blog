<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Student id', 'student_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('student_id', Input::post('student_id', isset($students_club) ? $students_club->student_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Student id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Club id', 'club_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('club_id', Input::post('club_id', isset($students_club) ? $students_club->club_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Club id')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>