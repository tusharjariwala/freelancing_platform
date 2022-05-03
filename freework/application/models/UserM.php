<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserM extends CI_Model
{
    public function LoginData($data)
    {
    	return $this->db->where($data)->get("tbluser")->result();
    }
   public function insertUser($data)
	{
		return $this->db->insert("tbluser",$data);
	}
	public function selectAllCity()
 	{
 		return $this->db->get("tblcity")->result();
 	}
 	public function getUserId($email) {
 		return $this->db->where("EmailId",$email)->get("tbluser")->result();
 	}
 	public function updateUser($data)
	{
		$where=array("UserId"=>$_SESSION['uid']);
		return $this->db->where($where)->update("tbluser",$data); 
	}
	public function selectUserInfo($data)
	{
		return $this->db->where($data)->get("tbluser u")->result()[0];
	}
 	public function displayCat()
	{
	    return $this->db->get("tblcategory")->result();
	}
}
?>