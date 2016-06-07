<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
 * Class Main_page
 * @property my_page my_page
 */
class Main_page extends CI_Controller {

	/**
	 * @var string
	 */
	public $sort;

	/**
	 * @var string
	 */
	public $table;



	function __construct()
	{
		parent::__construct();

		$this->load->helper('cookie');
		$this->load->model('my_page');



		$this->setTable($this->input->get('table'));
		$this->setSort($this->input->get('sort'));
	}
	public function index()		//	index page
	{
		$this->load->view('main');
	}

	public function jackets()		//	view table *jackets* on the page
	{
		$data ['jackets'] = $this->my_page->Jacket();
		$this->load->view('main',$data);
	}
	public function pants()		//	view info table *pants* on the page
	{
		$data ['pants'] = $this->my_page->Pants();
		$this->load->view('main',$data);
	}

	/**
	 * view administration page (auth if doesn't have permission)
	 * @return void
	 */
	public function admin_panel()
	{

		if(!$this->input->cookie('username')){
			$this->auth();
			return;
		}

		if ($this->getTable()) {

			if ($this->getTable() == 'All') {

				$arr = $this->my_page->All();

			} else {

				$arr = $this->db->select()
						->from($this->getTable())
						->order_by('name', $this->getSort())
						->get();

				$arr = $arr->num_rows() > 0 ? $arr->result_array() : [];
			}

			$data = ['items' => $arr, 'table' => $this->getTable()];

			$this->load->view('admin', $data);

		} else {

			$this->load->view('admin');
		}
	}

	/**
	 * admin login page
	 * @return void
	 */
	public function auth()
	{
		/** if data don't entered into form 'auth' - view form to write in login & pass */
		if (!$this->input->post()) {

			$this->load->view('auth.php');

		} else {
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

	/**
	 * log out method
	 */
	public function log_out()
	{
		delete_cookie('username');
		redirect('main_page/index');
	}

	/**
	 * delete item
	 * @return void
	 */
	public function delete()
	{
		$this->my_page->delPost($this->input->get());

		redirect('/main_page/admin_panel');
	}

	/**
	 * add new item
	 * @return void
	 */
	public function add_new()
	{
		if ($data = $this->input->post()) {

			$this->my_page->addPost($data);

			redirect('/main_page/admin_panel');
		} else {
			$this->load->view('add_new');
		}
	}

	/**
	 * update item
	 * @return void
	 */
	public function update()
	{
		if ($data = $this->input->post()) {

			$this->my_page->editPost($data);

			redirect('/main_page/admin_panel');

		} else {
			$data = $this->input->get();

			$full = $this->my_page->formEdit($data);

			$this->load->view('form_update', $full);
		}
	}

	/**
	 * @return string
	 */
	public function getSort()
	{
		return $this->sort;
	}

	/**
	 * @param string $sort
	 */
	public function setSort($sort)
	{
		$this->sort = $sort ?: 'asc';
	}

	/**
	 * @return string
	 */
	public function getTable()
	{
		return $this->table;
	}

	/**
	 * @param string $table
	 */
	public function setTable($table)
	{
		$this->table = $table;
	}
}