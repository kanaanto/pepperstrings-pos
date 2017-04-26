<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function get_sales_details(){
        $this->db->group_by('sales_id');
        return $this->db->get('sales_view');
    }

    public function get_sales_preview($sales_id){
        $this->db->select('*');
        $this->db->where('sales_id', $sales_id);
        return $this->db->get('sales_view');
    }

    public function get_sales($table_id){

    }


    public function insert_into_sales($data){
        $this->db->insert('sales', $data);
    }
}
