<?php 
class Vlog_model extends CI_model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->table_name = "vlogs";	
	}
	function save_vlog($vals,$id=""){
		$this->db->set($vals);
		if($id != ""){
			$this->db->where("id",$id);
			$this->db->update($this->table_name);
			return $id;
		}
		else{
			$this->db->insert($this->table_name);
			return $this->db->insert_id();
		}	
	}
	function get_vlog($id = ""){
		if($id != ""){
			$this->db->where("id",$id);
			return $this->db->get($this->table_name)->row();
		}
		else{
			return $this->db->get($this->table_name)->result();
		}
	}
	function delete_vlog($id){
		$this->db->where("id",$id);
		$this->db->delete($this->table_name);
		return $id;
	}
}

?>