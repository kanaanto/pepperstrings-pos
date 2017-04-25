<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends Admin_Controller {

    public function __construct()
    {
        parent::__construct();

        /* Load :: Common */

        $this->load->helper('number');
        $this->load->model('admin/orders_model');
		$this->load->model('admin/tables_model');
    }


	public function index()
	{
        if ( ! $this->ion_auth->logged_in() OR ! $this->ion_auth->is_admin())
        {
            redirect('auth/login', 'refresh');
        }
        else
        {
            /* Title Page */
            $this->page_title->push(lang('menu_tables'));
            $this->data['pagetitle'] = $this->page_title->show();

            /* Breadcrumbs */
            $this->data['breadcrumb'] = $this->breadcrumbs->show();

            /* Data */
            $this->data['table_list'] = $this->tables_model->get_table_list();
			
			/* Add additional views (modals) */
			$this->data['add_order_modal'] = $this->load->view('admin/orders/add_order_modal', NULL, TRUE);
			$this->data['bill_out_modal'] = $this->load->view('admin/orders/bill_out_modal', NULL, TRUE);
			$this->data['add_move_table_modal'] = $this->load->view('admin/orders/add_move_table_modal', NULL, TRUE);
			$this->data['delete_order_modal'] = $this->load->view('admin/orders/delete_order_modal', NULL, TRUE);
			/* Load Template */			
			$this->template->admin_render('admin/orders/index', $this->data);
			
        }
	}
	
	public function add_table(){
		$this->form_validation->set_rules($this->input->post('table_name'), 
										'Table name', 
										'trim|required|is_unique[TABLES.TABLE_ID]');
		$data = array(
			'table_id' => $this->input->post('table_name')
		);
		if ($this->form_validation->run() != FALSE && isset($_POST) && ! empty($_POST)){
			//Transfering data
			$this->tables_model->add_table($data); 
			//Reloading view
			//$this->index(); 
			// TO DO: Add success message and display on admin/orders banner
		} else {
			//TO DO: Add error message and display on admin/orders banner
		}
		redirect(site_url('/admin/orders'));
	}
		
}
