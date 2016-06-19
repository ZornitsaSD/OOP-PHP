<?php
	
	class Names_model extends CI_Model {

		public function __construct() 
		{
			$this->load->database();
		}

		public function get_all_names($id = FALSE)
		{
			if ($id === FALSE)
			{
	            $query = $this->db->get('names');
	            return $query->result_array();
	    	}

  				$query = $this->db->get_where('names', array('id' => $id));
  			    return $query->row_array();
		}

		public function add_name()
        {
           	$data = array(
					        'name' => $this->input->post('name'),
					        'meaning' => $this->input->post('meaning'),
					        'gender' => $this->input->post('gender')
    					);

    		return $this->db->insert('names', $data);
        }

        public function update_name()
        {
        	$id = $this->input->post('id');
           	$data = array(
           					// 'id'=>$this->input->post('id'),
					        'name' => $this->input->post('name'),
					        'meaning' => $this->input->post('meaning'),
					        'gender' => $this->input->post('gender')
    					);

           	$this->db->where('id', $id);
    		return $this->db->update('names', $data);
        }


	}