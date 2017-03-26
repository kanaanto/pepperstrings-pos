<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends Admin_Controller {

    public function __construct()
    {
        parent::__construct();

        /* Load :: Common */
        $this->load->helper('number');
        $this->load->model('admin/orders_model');
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
//            $this->data['count_users']       = $this->orders_model->get_count_record('users');
//            $this->data['count_groups']      = $this->orders_model->get_count_record('groups');



            /* Load Template */
            
			
			/* Add additional views (modals) */
			$this->data['add_order_modal'] = $this->load->view('admin/orders/add_order_modal', NULL, TRUE);
			$this->data['bill_out_modal'] = $this->load->view('admin/orders/bill_out_modal', NULL, TRUE);
			$this->data['move_table_modal'] = $this->load->view('admin/orders/move_table_modal', NULL, TRUE);
			$this->data['delete_order_modal'] = $this->load->view('admin/orders/delete_order_modal', NULL, TRUE);
			
			$this->template->admin_render('admin/orders/index', $this->data);
			//$this->load->view('admin/orders/index', $data);
        }
	}
}
