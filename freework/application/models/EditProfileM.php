<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EditProfileM extends CI_Model
{
	public function selectUserProjects()
	{
		return $this->db->select("p.ProjectId,p.Title,p.Description,p.SubCategoryId,p.Status,p.CreateDate,p.UserId,p.UploadFile ,ap.Budget,ap.ApprovedDate")->from("tblapprovedproject ap")->join("tblproject p","p.ProjectId=ap.ProjectId")->get()->result();

	}
   public function selectUserInfo($data)
	{
		return $this->db->where($data)->get("tbluser u")->result()[0];
	}
	public function updateInfo($data)
	{
		$where=array("UserId"=>$_SESSION['uid']);
		return $this->db->where($where)->update("tbluser",$data); 
	}
	public function selectOurUserInfo($data)
	{
		return $this->db->where($data)->get("tbluser u")->result()[0];
	}
	
	public function checkskills()
 	{
 		 	 
 		return $this->db->select("*")->from("tblskill")->get()->result();
 		 
 	}
 	public function insertSkills($data)
 	{
 		return $this->db->insert("tbluserskill",$data);
 	}
 	public function insertfeedback($data)
 	{
 		return $this->db->insert("tblfeedback",$data);
 	}
 	public function insertreview($data)
 	{
 		return $this->db->insert("tblreview",$data);
 	}
 	public function selectuserrating($id)
 	{

 		  return $this->db->where("UserId", $id)->from("tblreview")->get()->result();
 		  // return $this->db->where("FromUserId", $id)->from("tblreview")->get()->result()[0]->UserId;
 	}
 	// public function selectrating($id)
 	// {
 	// 	return $this->db->where("UserId", $id)->from("tblreview")->get()->result();
 	// }
 	public function Userskills()
 	{
 		return $this->db->select("*")->from("tbluser u")->join("tbluserskill us","us.UserId=u.UserId")->join("tblskill s","us.SkillId=s.SkillId")->get()->result();
 	}
 	public function selectrating()
 	{
 		return $this->db->select("*")->from("tblreview")->get()->result();
 	}
}