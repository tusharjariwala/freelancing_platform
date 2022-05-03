<?php

 defined('BASEPATH') OR exit('No direct script access allowed');
 class UserM extends CI_Model
 {
 	public function selectAllUser()
 	{
 		 // return $this->db->get("tbluser")->result();
 		 $this->db->select('*');
 		 $this->db->from('tblcity');
 		 $this->db->join('tbluser','tblcity.CityId=tbluser.CityId');
 		 	return $this->db->get()->result();
 		 
 		 
 	}
 	public function selectAllfeedback()
 	{
 		 // return $this->db->get("tbluser")->result();
 		 $this->db->select('*');
 		 $this->db->from('tbluser');
 		 $this->db->join('tblfeedback','tbluser.UserId=tblfeedback.UserId');
 		 	return $this->db->get()->result();
 		 
 		 
 	}
 	public function selectAllComplain()
 	{
 		 // return $this->db->get("tbluser")->result();
 		 $this->db->select('*');
 		 $this->db->from('tbluser');
 		 $this->db->join('tblcomplaint','tbluser.UserId=tblcomplaint.UserId');
 		 	return $this->db->get()->result();
 		 
 		 
 	}
 	
 }

 ?>