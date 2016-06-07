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
     * @return array
     */
    public function Jacket()
    {
        $arr = $this->db->get('Jacket');
        return $arr->num_rows() > 0 ? $arr->result_array() : [];
    }

    /**
     * @return array
     */
    public function Pants()
    {
        $arr = $this->db->get('Pants');
        return $arr->num_rows() > 0 ? $arr->result_array() : [];
    }

    /**
     * @return array
     */
    public function All()
    {

        $sort = new Main_page();
        $all = $this->db->query("SELECT * FROM Jacket UNION SELECT * FROM Pants ORDER BY `name` {$sort->getSort()}")->result_array();
        return $all;

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
        $table = $data['table'];
        $id = $data['id'];

        $data = ['name'=> $data['name'], 'description'=>$data['description']];

        $this->db->where('id', $id);
        $this->db->update($table, $data);
    }

    /**
     * @param $data
     * @return array
     */
    public function formEdit($data)
    {

        $table = $data['table'];

        $id = $data['id'];

        $vals = ['table' => $table, 'id' => $id];

        $data = $this->db->get_where($table, ['id'=>$id])->result_array();

        $full = array_merge($vals,$data[0]);

        return $full;
    }

    /**
     * @param $data
     */
    public function addPost($data)
    {
        $data = [ 'name' => $this->input->post('name'),
            'description' => $this->input->post('description')];

        $this->db->insert($this->input->post('table'), $data);
    }

    /**
     * @param $data
     */
    public function delPost($data)
    {
        $this->db->delete($data['table'],['id'=>$data['id']]);
    }
}