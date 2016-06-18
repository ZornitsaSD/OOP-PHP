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

	}

?>