<?php
	// Зад.2 Да се извлече информация за имената/таблица names/ от БД oophp.sql 
	// и да се покаже по следния начин ­
	// Таблица 1 ­ Номериран списък с имената.
	// На всеки ред в Таблица 1 да има бутон Show,
	// който показва в нова страница информацията за конкретното име ­ име,
	// значение, пол и бутон за връщане към общата таблица.

	class Names extends CI_Controller {

		public function __construct()
        {
            parent::__construct();
            $this->load->model('names_model');
            $this->load->helper('url_helper');
        }

        public function index()
        {
            $data['names'] = $this->names_model->get_all_names();
            $data['title'] = 'List of all names';

            // $this->load->view('templates/header', $data);
            $this->load->view('names/all_names_view', $data);
            // $this->load->view('templates/footer');
        }

        public function view($id = NULL)
                {
                        $data['names_item'] = $this->names_model->get_all_names($id);


                        if (empty($data['names_item']))
                        {
                                show_404();
                        }

                        $data['title'] = $data['names_item']['name'];

                        // $this->load->view('templates/header', $data);
                        $this->load->view('names/names_info_view', $data);
                        // $this->load->view('templates/footer');
                }

        public function show_add_form()
        {
        	$this->load->helper('form');
        	$data['title'] = 'Add a new name';
        	$this->load->view('names/add_name_view', $data);
        }

        public function create_name()
        {   

        	$this->load->helper('form');
            
            $data['title'] = 'Add a new name';

            if (isset($_POST['submit']))
            {
            	$this->names_model->add_name();
            	$this->load->view('names/add_ok_view');
       		}
       		else
       		{
       			$this->load->view('names/add_name_form');
       		}
        
        }

        public function show_update_form($id)
        {   

        	$this->load->helper('form');
        	$data['names_item'] = $this->names_model->get_all_names($id);
            // $data['title'] = 'Update name';

            $this->load->view('names/update_form_view', $data);    
        }

        public function update_name_info()
        {   

        	$this->load->helper('form');
            
            $data['title'] = 'Update a name';

            if (isset($_POST['submit']))
            {
            	$this->names_model->update_name();
            	$this->load->view('names/update_ok_view');
       		}
       		else
       		{
       			$this->load->view('names/update_name_info', $data);
       		}  
        }
                

                

	}
?>