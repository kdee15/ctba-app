<?php

	class team_model extends CI_Model {
		
		function getAll(){
			$q = $this->db->get('teams');
			
			if ($q->num_rows() > 0 ) {
				foreach ($q->result() as $row)
				{
					$data[] = $row;
				}

				return $data;
			}
		}
		
		function getTeamsForClub($clubid){
			$sql = "select team_code,league_name, club_name from leagues,clubs,teams where clubs.club_code = ? and teams.club_code = clubs.club_code and teams.league_code = leagues.league_code";
			$query = $this->db->query($sql,array($clubid));
			if ($query->num_rows() > 0 ) {
				foreach ($query->result() as $row)
				{
					$data[] = $row;
				}

				return $data;
			}
		}			
			
		function getTeamsForLeague($leagueid){
			$query = $this->db->get_where('teams',array('league_code' => $clubid));
			return $query->row_array();
		}
		
		function get_dropdown_list($clubid){
									echo "Model".$clubid;
			$sql = "SELECT * FROM leagues
					where not exists ( select null from teams
					where club_code = ? and teams.league_code = leagues.league_code)
					order by league_name";	
			$query = $this->db->query($sql,array($clubid));
			$return = array();
			if ( $query->num_rows() > 0) {
				foreach ($query->result_array() as $row)
				{
					$return[$row['league_code']] = $row['league_name'];
				}
			}
			return $return;
		}
		
		function addTeam($data){
			$this->db->insert('teams',$data);
			return;
		}		
	
	}

		
		
	