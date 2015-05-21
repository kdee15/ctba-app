<?php

	class League_model extends CI_Model {
		
		function getAll(){
			$q = $this->db->get('leagues');
			
			if ($q->num_rows() > 0 ) {
				foreach ($q->result() as $row)
				{
					$data[] = $row;
				}

				return $data;
			}
		}
		
		function getLeague($leagueid){
			$query = $this->db->get_where('leagues',array('league_code' => $leagueid));
			return $query->row_array();
		}
		
		function delete($leagueid){
			$this->db->where('league_code',$leagueid);
			$this->db->delete('leagues');
		}	
		
		function addLeague($data){
			$this->db->insert('leagues',$data);
			return;
		}
		
		function update($leagueid,$data){
			$this->db->where('league_code', $leagueid);
			$this->db->update('leagues', $data);
		}
	}

		
		
	