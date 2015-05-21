<?php

	class ctba_user extends CI_Model {
		
		function getAll(){
			$q = $this->db->get('ctba_users');
			
			if ($q->num_rows() > 0 ) {
				foreach ($q->result() as $row)
				{
					$data[] = $row;
				}

				return $data;
			}
		}
		
		
	}