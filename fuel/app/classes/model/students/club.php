<?php
use Orm\Model;

class Model_Students_Club extends Model
{
	protected static $_properties = array(
		'id',
		'student_id',
		'club_id',
	);


	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('student_id', 'Student Id', 'required|valid_string[numeric]');
		$val->add_field('club_id', 'Club Id', 'required|valid_string[numeric]');

		return $val;
	}

}
