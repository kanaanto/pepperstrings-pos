<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }


    public function get_products_list()
    {
        $query = $this->db->get('products');
		return $query;

    }

    public function get_prod_with_type(){
        $this->db->select('products.*, prod_types.prod_type_name');
        $this->db->from('products');
        $this->db->join('prod_types', 'prod_types.prod_type_id = products.prod_type_id', 'left');
        $query = $this->db->get();
        return $query;
    }

    public function get_prod_unit(){
        $this->db->select('unit');
        $this->db->distinct();
        $query = $this->db->get('products');
        return $query;   
    }

    public function get_prod_types(){
        $this->db->select('prod_type_id, prod_type_name');
        $query = $this->db->get('prod_types');
        return $query;
    }

    public function add_products($data)
	{
		$this->db->insert('products',$data);
    } 

    public function update_products($data){

    }
}
