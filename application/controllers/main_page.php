<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
 * Class Main_page
 * @property my_page my_page
 */
class Main_page extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->helper('cookie');
		$this->load->model('my_page');
	}
	public function index()		//	index page
	{
		$this->load->view('main');
	}

	public function jackets()		//	view table *jackets* on the page
	{
		$data ['items'] = $this->my_page->Jacket();
		$this->load->view('main',$data);
	}
	public function pants()		//	view info table *pants* on the page
	{
		$data ['items'] = $this->my_page->Pants();
		$this->load->view('main',$data);
	}
	public function admin_panel()		//	view administration page (auth if doesn't have permission)
	{
		$is = $this->input->cookie('username');

		if ($is) {		//	if anydody is logged in cookie -> load admin page

			if($this->input->get()) {

				$func = $this->input->get('table');

				$data = ['items' => $this->my_page->$func(), 'table'=>$func];
				$this->load->view('admin', $data);

			} else {
				$this->load->view('admin');
			}
		} else {		//	else -> load authendification page
			$this->auth();
		}
	}

	public function auth()			//	admin login page
	{
		if (!$this->input->post()) {		//	if data doesn't entered into form 'auth' - view form to write in login & pass

			$this->load->view('auth.php');

		} else {		//	if data is entered -> check this user in database
			$data = $this->my_page->check_user($this->input->post('username'),$this->input->post('password'));

			if ($data) {
				$this->my_page->loginUser($data);

				redirect('main_page/admin_panel');

			} else {
				$name['name'] = $this->input->post('username');

				$this->load->view('auth.php', $name);
			}
		}
	}
	public function log_out()		//	log out method
	{
		delete_cookie('username');
		redirect('main_page/index');
	}
	public function delete()		//	delete item
	{
		$this->my_page->delPost($this->input->get());

		redirect('/main_page/admin_panel');
	}
	public function add_new()		//	add new item
	{
		if ($data = $this->input->post()) {

			$this->my_page->addPost($data);

			redirect('/main_page/admin_panel');
		} else {
			$this->load->view('add_new');
		}
	}
	public function update()		//	update item
	{
		if ($data = $this->input->post()) {			//	when data entered into update form -> edit current post in db

			$this->my_page->editPost($data);

			redirect('/main_page/admin_panel');

		} else {
			$data = $this->input->get();

			$full = $this->my_page->formEdit($data);

			$this->load->view('form_update', $full);
		}
	}
}