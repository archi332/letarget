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

	/**
	 * @return viod
	 */
	public function index()		//	index page
	{
		$tab = $this->input->get('tab');

		if($tab) $data['items'] = $this->db->get_where('items', ['category_id'=>$tab])->result_array();

		$data['category'] = $this->getCategory();
		$data['sub_category'] = $this->getSubCategory();

		$this->load->view('main', $data);
	}

	/**
	 * view administration page (auth if doesn't have permission)
	 * @return void
	 */
	public function admin_panel()
	{
		$tab = $this->input->get('tab');
		$cat = $this->input->get('cat');

		if (!$this->input->cookie('username')) {
			$this->auth();
			return;
		}

		if ($tab == 'A') {
			if ($sort = $this->input->get('sort')) $this->db->order_by('name', $sort);
			$data['items'] = $this->db->get('items')->result_array();
		}

		if ($tab && is_numeric($tab)) {

			if ($sort = $this->input->get('sort')) $this->db->order_by('name', $sort);
			$this->db->where("category_id = $tab");
			$data['items'] = $this->db->get('items')->result_array();
		}

		if ($cat && is_numeric($cat)) {
			$data=[];

			$this->db->select('*');
			$this->db->from('items');
			$this->db->join('sub_category', 'items.category_id = sub_category.id_cat');
			if ($sort = $this->input->get('sort')) $this->db->order_by('name', $sort);
			$this->db->where("sub_category_id = $cat");

			$data['items'] = $this->db->get()->result_array();
		}

		$data['category'] = $this->getCategory();
		$data['sub_category'] = $this->getSubCategory();


		$this->load->view('admin',$data);
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
			$data = $this->my_page->check_user($this->input->post('username'), $this->input->post('password'));

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

		redirect('main_page/admin_panel');
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

			$data['cat'] = $this->getCategory();
			$data['sub_cat'] = $this->getSubCategory();

			$this->load->view('add_new', $data);
		}
	}

	/**
	 * add category
	 * @return void
	 */
	public function add_cat()
	{
		if ($data = $this->input->post('name')) {
			$this->my_page->addCatalog($data);
			redirect('/main_page/admin_panel');
		} else {
			$this->load->view('add_cat');
		}
	}

	/**
	 * add sub Category
	 * @return void
	 */
	public function add_sub_cat()
	{
		if ($this->input->post('name')) {

			$this->my_page->addSubCatalog($this->input->post());

			redirect('/main_page/admin_panel');
		} else {
			$data['categories'] = $this->getCategory();
			$this->load->view('add_sub_cat', $data);
		}
	}


	public function edit_cat()
	{
		if ($id =  $this->input->get('id')) {

			$data['cat_edit'] = $this->db->get_where('category', ['id'=>$id])->row_array();

		}
			$data['categories'] = $this->db->get('category')->result_array();

		$this->load->view('form_edit_categories', $data);
	}

	public function update_cat()
	{
		$data = ['category_name' => $this->input->post('category_name')];

		$id = $this->input->post('id_items');

		$this->db->where('id', $id);
		$this->db->update('category', $data);

		redirect('/main_page/admin_panel');
	}
	public function delete_cat()
	{
		$id['id'] = $this->input->get('id');
		$this->db->delete('category', $id);
		redirect('/main_page/admin_panel');
	}



	public function edit_sub_cat()
	{
		if ($id =  $this->input->get('id')) {

			$data['sub_cat_edit'] = $this->db->get_where('sub_category', ['id_cat'=>$id])->row_array();
			$data['category'] = $this->getCategory();

		}
		$data['sub_categories'] = $this->getSubCategory();

		$this->load->view('form_edit_sub_categories', $data);
	}

	public function update_sub_cat()
	{
		$data = ['item_category_name' => $this->input->post('category_name'),
				'sub_category_id' => $this->input->post('id_items')];

		$id = $this->input->post('id_items');

		$this->db->where('id_cat', $id);
		$this->db->update('sub_category', $data);
		redirect('/main_page/admin_panel');
	}

	public function delete_sub_cat()
	{
		$id['id_cat'] = $this->input->get('id');

		$this->db->delete('sub_category', $id);
		redirect('/main_page/admin_panel');
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

			$data = $this->my_page->formEdit($this->input->get());

			$data['cat'] = $this->getCategory();
			$data['sub_cat'] = $this->getSubCategory();

			$this->load->view('form_update', $data);
		}
	}


	/**
	 * @return array
	 */
	public function getCategory()
	{
		$data = $this->db->get('category')->result_array();

		return $data;
	}

	/**
	 * @return array
	 */
	public function getSubCategory()
	{
		$data = $this->db->get('sub_category')->result_array();

		return $data;
	}
}