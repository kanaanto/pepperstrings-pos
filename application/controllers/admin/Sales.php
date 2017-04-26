<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales extends Admin_Controller {

    public function __construct()
    {
        parent::__construct();

        /* Title Page :: Common */
		//$this->page_title->push("Sales");
        $this->page_title->push(lang('menu_sales'));
        $this->data['pagetitle'] = $this->page_title->show();

        /* Breadcrumbs :: Common */
        $this->breadcrumbs->unshift(1, lang('menu_inventory'), 'admin/sales');

        /* Load Models*/
        $this->load->model('admin/sales_model');
    }


	public function index()
	{
		if ( ! $this->ion_auth->logged_in() OR ! $this->ion_auth->is_admin())
		{
			redirect('auth', 'refresh');
		}
        else
        {
            /* Breadcrumbs */
            $this->data['breadcrumb'] = $this->breadcrumbs->show();


            /* Get Sales Details*/

            $this->data['sales_details'] = $this->sales_model->get_sales_details();

            /* Load Template */
            $this->template->admin_render('admin/sales/index', $this->data);
        }
	}

    public function get_sales_preview(){
        $data['preview_data'] = $this->sales_model->get_sales_preview($this->input->get('sales_id'));
        $theHTMLResponse = $this->load->view('admin/sales/preview_table', $data, true);

        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode(array('previewHtml'=> $theHTMLResponse)));       
    }
}
