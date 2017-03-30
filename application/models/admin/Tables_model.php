<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tables_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }


    public function get_table_list()
    {
        $query = $this->db->get('tables');
		return $query;

    }


    public function add_table($data)
	{
		$this->db->insert('tables',$data);
    }

}
