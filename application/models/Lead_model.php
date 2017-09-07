<?php if ( ! defined('BASEPATH')) exit ('No direct script  allow'); 

class Lead_model extends  CI_Model {
	
	function select_all($select,$table)
	{
		$this->db->select( $select );
		$this->db->from( $table );
		return $this->db->get();
	}
	
	function select_where($select,$table,$where)
	{
		$this->db->select( $select );
		$this->db->from( $table );
		$this->db->where( $where );
		return $this->db->get();
	}
	
	function get_where($field,$value,$table){
			
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($field,$value);
		$result	=	$this->db->get();
		return $result; 
		}
	
	
	function insert_array($table,$data)
	{
		$this->db->insert( $table,$data );
		return $this->db->insert_id();	
	}
	
			
}
?>