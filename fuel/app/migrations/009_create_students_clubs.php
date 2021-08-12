<?php

namespace Fuel\Migrations;

class Create_students_clubs
{
	public function up()
	{
		\DBUtil::create_table('students_clubs', array(
			'id' => array('type' => 'int', 'unsigned' => true, 'null' => false, 'auto_increment' => true, 'constraint' => '11'),
			'student_id' => array('constraint' => '11', 'null' => false, 'type' => 'int', 'unsigned' => true),
			'club_id' => array('constraint' => '11', 'null' => false, 'type' => 'int', 'unsigned' => true),
		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('students_clubs');
	}
}