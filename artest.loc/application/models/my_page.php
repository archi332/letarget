<?php

/**
 * Class my_page
 */
class my_page extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param string $name
     * @param string $pass
     * @return mixed
     */
    public function check_user($name, $pass)
    {
        $data =  $this->db->get_where('users', array('name'=>$name, 'password'=>$pass))->result_array();
        return $data;
    }

    /**
     * @param array $data
     */
    public function loginUser($data)
    {
        $data = $data['0'];

        $cookie_array = [ 'name' => 'username',
            'value' => $data['name'],
            'expire' => '86500',
            'path' => '/' ];
        $this->input->set_cookie($cookie_array);
    }

    /**
     * @param $data
     */
    public function editPost($data)
    {
        $id = $data['id_items'];

        $data = ['name'=> $data['name'], 'description'=>$data['description'], 'category_id'=>$data['sub_cat_id']];

        $this->db->where('id_items', $id);
        $this->db->update('items', $data);
    }

    /**
     * @param $data
     * @return array
     */
    public function formEdit($data)
    {
        $id = $data['id'];

        $data = $this->db->get_where('items', ['id_items'=>$id])->row_array();

        return $data;
    }

    /**
     * @param $data
     */
    public function addPost($data)
    {
        $data = [ 'name' => $this->input->post('name'),
            'description' => $this->input->post('description'),
            'category_id' => $this->input->post('sub_cat_id')];

        $this->db->insert('items', $data);
    }

    /**
     * @param $data
     */
    public function delPost($data)
    {
        $this->db->delete('items',['id_items'=>$data['id']]);
    }

    /**
     * add category
     * @param $data
     * @return void
     */
    public function addCatalog($data)
    {
        $this->db->insert('category', ['category_name'=>$data]);
    }

    /**
     * add subCatalog
     * @param $data
     * @return void
     */
    public function addSubCatalog($data)
    {

        $data = [ 'item_category_name' => $data['name'],
                'sub_category_id' => $data['cat_id']];

        $this->db->insert('sub_category', $data);
    }
}