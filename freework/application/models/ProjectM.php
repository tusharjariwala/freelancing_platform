<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProjectM extends CI_Model
{
  public function selectAllCategory()
  {
  	return $this->db->get("tblcategory")->result();
  }
   public function selectSubCatById($data)
    {
    	return $this->db->where($data)->get("tblsubcategory")->result();

    }
    public function selectAllSkillsBySubCat($data)
    {
    	return $this->db->where($data)->get("tblskill")->result();

    }
    public function insertProject($data)
    {

    	return $this->db->insert("tblproject",$data);
      return $this->db->insert_id();
    	
    }
    public function selectProjectById($id) 
    {
      return $this->db->where("ProjectId",$id)->get("tblproject")->result()[0];
    }
    public function insertProjectSkills($data)
    {
      return $this->db->insert("tblprojectskill",$data);
    }
    
} 