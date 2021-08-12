<?php
class Controller_Club extends Controller_Template
{

	public function action_index()
	{
		$data['clubs'] = Model_Club::find('all');
		$this->template->title = "Clubs";
		$this->template->content = View::forge('club/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('club');

		if ( ! $data['club'] = Model_Club::find($id))
		{
			Session::set_flash('error', 'Could not find club #'.$id);
			Response::redirect('club');
		}

		$this->template->title = "Club";
		$this->template->content = View::forge('club/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Club::validate('create');

			if ($val->run())
			{
				$club = Model_Club::forge(array(
					'name' => Input::post('name'),
				));

				if ($club and $club->save())
				{
					Session::set_flash('success', 'Added club #'.$club->id.'.');

					Response::redirect('club');
				}

				else
				{
					Session::set_flash('error', 'Could not save club.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Clubs";
		$this->template->content = View::forge('club/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('club');

		if ( ! $club = Model_Club::find($id))
		{
			Session::set_flash('error', 'Could not find club #'.$id);
			Response::redirect('club');
		}

		$val = Model_Club::validate('edit');

		if ($val->run())
		{
			$club->name = Input::post('name');

			if ($club->save())
			{
				Session::set_flash('success', 'Updated club #' . $id);

				Response::redirect('club');
			}

			else
			{
				Session::set_flash('error', 'Could not update club #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$club->name = $val->validated('name');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('club', $club, false);
		}

		$this->template->title = "Clubs";
		$this->template->content = View::forge('club/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('club');

		if ($club = Model_Club::find($id))
		{
			$club->delete();

			Session::set_flash('success', 'Deleted club #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete club #'.$id);
		}

		Response::redirect('club');

	}

}
