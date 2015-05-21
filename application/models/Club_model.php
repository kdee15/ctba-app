<?php

	class club_model extends CI_Model {
		
		function getAll(){
			$q = $this->db->get('clubs');
			
			if ($q->num_rows() > 0 ) {
				foreach ($q->result() as $row)
				{
					$data[] = $row;
				}

				return $data;
			}
		}
		
		function getClub($clubid){
			$query = $this->db->get_where('clubs',array('club_code' => $clubid));
			return $query->row_array();
		}
		
		function delete($clubid){
			$this->db->where('club_code',$clubid);
			$this->db->delete('clubs');
		}	
		
		function addClub($data){
			$this->db->insert('clubs',$data);
			return;
		}
		
		function update($clubid,$data){
			$this->db->where('club_code', $clubid);
			$this->db->update('clubs', $data);
		}
	}

		
		
	