<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function get_inventory_items(){
        $this->db->select('inventory_id, inv_name');
        $query = $this->db->get('inventories');
        return $query;
    }


    public function get_bar_inventory_list(){
        $this->db->select('*');
        $this->db->where('is_kitchen','0');
        $query = $this->db->get('inventories');
        return $query;
    }

    public function get_kitchen_inventory_list(){
        $this->db->select('*');
        $this->db->where('is_kitchen','1');
        $query = $this->db->get('inventories');
        return $query;
    }

    public function add_inventory_item($data){
        $this->db->insert("inventories", $data);
    }

    public function update_inventory_item($data){
        $this->db->replace("inventories", $data);
    }

    public function update_inventory_end($data){

        $this->db->set('inv_end', $data['qty'] + $data['inv_in'] - $data['inv_out']);
        $this->db->where('inventory_id', $data['inventory_id']);
        $this->db->update('inventories');
    
    }

    public function delete_inventory($id){
        $this->db->delete('inventories', array("inventory_id" => $id));

    }

    public function close_cashier(){
        $this->db->select('*');
        $query = $this->db->get('inventories');
        foreach ($query->result() as $inv) {
            $array = array(
                "qty" => $inv->inv_end,
                "inv_in" => 0,
                "inv_out" => 0
            );
            $this->db->set($array);
            $this->db->where('inventory_id', $inv->inventory_id);
            $this->db->update('inventories');
        }

        
    }

}
