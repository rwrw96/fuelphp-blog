<?php
class Controller_Students_Club extends Controller_Template
{

	public function action_index()
	{
		$data['students_clubs'] = Model_Students_Club::find('all');
		$this->template->title = "Students_clubs";
		$this->template->content = View::forge('students/club/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('students/club');

		if ( ! $data['students_club'] = Model_Students_Club::find($id))
		{
			Session::set_flash('error', 'Could not find students_club #'.$id);
			Response::redirect('students/club');
		}

		$this->template->title = "Students_club";
		$this->template->content = View::forge('students/club/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Students_Club::validate('create');

			if ($val->run())
			{
				$students_club = Model_Students_Club::forge(array(
					'student_id' => Input::post('student_id'),
					'club_id' => Input::post('club_id'),
				));

				if ($students_club and $students_club->save())
				{
					Session::set_flash('success', 'Added students_club #'.$students_club->id.'.');

					Response::redirect('students/club');
				}

				else
				{
					Session::set_flash('error', 'Could not save students_club.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Students_Clubs";
		$this->template->content = View::forge('students/club/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('students/club');

		if ( ! $students_club = Model_Students_Club::find($id))
		{
			Session::set_flash('error', 'Could not find students_club #'.$id);
			Response::redirect('students/club');
		}

		$val = Model_Students_Club::validate('edit');

		if ($val->run())
		{
			$students_club->student_id = Input::post('student_id');
			$students_club->club_id = Input::post('club_id');

			if ($students_club->save())
			{
				Session::set_flash('success', 'Updated students_club #' . $id);

				Response::redirect('students/club');
			}

			else
			{
				Session::set_flash('error', 'Could not update students_club #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$students_club->student_id = $val->validated('student_id');
				$students_club->club_id = $val->validated('club_id');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('students_club', $students_club, false);
		}

		$this->template->title = "Students_clubs";
		$this->template->content = View::forge('students/club/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('students/club');

		if ($students_club = Model_Students_Club::find($id))
		{
			$students_club->delete();

			Session::set_flash('success', 'Deleted students_club #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete students_club #'.$id);
		}

		Response::redirect('students/club');

	}

}
