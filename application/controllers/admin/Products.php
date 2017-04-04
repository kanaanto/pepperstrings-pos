<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends Admin_Controller {

    public function __construct()
    {
        parent::__construct();

        /* Title Page :: Common */
        $this->page_title->push(lang('menu_products'));
        $this->data['pagetitle'] = $this->page_title->show();

        /* Breadcrumbs :: Common */
        $this->breadcrumbs->unshift(1, lang('menu_products'), 'admin/products');

        /*Load Model*/
        $this->load->model('admin/products_model');
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

            /*List of Products with Type*/
            $this->data['products_list_with_type'] = $this->products_model->get_prod_with_type();

            /* Load Template */
            $this->template->admin_render('admin/products/index', $this->data);
        }
	}

    public function add(){
        if ( ! $this->ion_auth->logged_in() OR ! $this->ion_auth->is_admin())
        {
            redirect('auth', 'refresh');
        }
        else
        {
            /* Breadcrumbs */
            $this->data['breadcrumb'] = $this->breadcrumbs->show();


            /*List Units*/
            $this->data['prod_unit'] = $this->products_model->get_prod_unit();

            /*List Prod Types*/
            $this->data['prod_types'] = $this->products_model->get_prod_types();
            
            /* Load Template */
            $this->template->admin_render('admin/products/add', $this->data);
        }
    }
}
