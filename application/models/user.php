<?php

class User extends CI_Model{

	function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}

	function cek_reset($table,$where){
		return $this->db->get_where($table,$where);
	}

	function tampil_data()
	{
		$this->db->select("*");
	    $this->db->from("users");
	    $query = $this->db->get();
	    return $query;
	}

	function edit_data($where,$table){
	return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}
