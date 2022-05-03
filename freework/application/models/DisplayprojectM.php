<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DisplayprojectM extends CI_Model
{
	public function selectAllProjects()
	{
         return $this->db->select("p.*,sc.SubCategoryName,u.UserName,u.UserId,u.ProfilePic as uimg")->from("tblproject p")->join("tblsubcategory sc","sc.SubCategoryId=p.SubCategoryId")->join("tbluser u","u.UserId=p.UserId")->join("tblcategory c","c.CategoryId=sc.CategoryId")->get()->result();
	}
	public function selectBidById($id)
	{
        return $this->db->where("p.ProjectId",$id)->from("tblprojectbid b")->join("tblproject p","p.ProjectId=b.ProjectId")->get()->result();
   
	}
    public function insertBid($data)
	{
      return $this->db->insert("tblprojectbid",$data);
   
	}
	public function loadbidById($data)
	{
       return $this->db->from("tblprojectbid b")->join("tbluser u","u.UserId=b.UserId")->where($data)->get()->result();
 	}
  public function loadskills($data)
  {
      return $this->db->from("tblskill s")->join("tblprojectskill ps","ps.SkillId=s.SkillId")->where($data)->get()->result();
  }
	public function Saveproject($data)
   {
    return $this->db->insert("tblsaveproject",$data);
   }
   public function selectSaveProject()
   {
      return $this->db->from("tblsaveproject  sp")->join("tblproject p","sp.ProjectId=p.ProjectId")->get()->result();
   }
     public function deleteSaveProject($data)
   {
      return $this->db->delete("tblsaveproject",$data);
   }
   public function deleteBid($data)
   {
      return $this->db->delete("tblprojectbid",$data);
   }
     public function checksave($data)
   {
     return $this->db->where($data)->get("tblsaveproject")->result();
   }
  
    public function selectsaveProjectDetail($data)
    {
       return $this->db->select("p.*,sc.SubCategoryName,u.UserName,u.UserId,u.ProfilePic as uimg")->from("tblproject p")->join("tblsubcategory sc","sc.SubCategoryId=p.SubCategoryId")->join("tbluser u","u.UserId=p.UserId")->join("tblcategory c","c.CategoryId=sc.CategoryId")->where_in("p.ProjectId",$data)->get()->result();
    }
 
    public function selectProjectByUser($id)
    {
       return $this->db->where("u.UserId",$id)->from("tblproject  p")->join("tbluser u","p.UserId=u.UserId")->get()->result();
    }

    public function hadBid($uid, $pid) {
      $res = $this->db->where(["UserId" => $uid, "ProjectId" => $pid])->from("tblprojectbid")->get()->result();
      if($res)
        return true;
      else
        return false;
    }
    
    public function getProjectUid($id) {
      return $this->db->where("ProjectId", $id)->from("tblproject")->get()->result()[0]->UserId;
    }
    public function insertapproval($data)
    {
      return $this->db->insert("tblapprovedproject",$data);
    }
  
    public function checkskills()
  {
       
    return $this->db->select("*")->from("tblskill s")->join("tblprojectskill ps","ps.skillId=s.skillId")->get()->result();
     
  }
  public function selectUserProjects()
  {
         
    return $this->db->select("p.ProjectId,p.Title,p.Description,p.SubCategoryId,p.Status,p.CreateDate,p.UserId,p.UploadFile ,ap.Budget,ap.ApprovedDate")->from("tblapprovedproject ap")->join("tblproject p","p.ProjectId=ap.ProjectId")->get()->result();

  }
   public function selectUserInfo($data)
  {
    return $this->db->where($data)->get("tbluser u")->result()[0];
  }
public function selectmyproject($data)
  {
    return $this->db->where($data)->get("tblproject")->result();
  }
  public function updateProject($newdata, $where)
  {
    $this->db->insert("tblprojectupdate",$newdata);
  //  return $this->db->where($where)->update("tblproject", $newdata);
  }

  public function getProjectByProjectID($data)
  {
    return $this->db->where($data)->get("tblproject")->result();
  }

  public function getProjectUpdates($data)
  {
    return $this->db->where($data)->get("tblprojectupdate")->result();
  }
  public function getBidInfo($data)
  {
    return $this->db->where($data)->get("tblprojectbid")->result()[0];
  }
  public function updateProjectStatus($where,$ndata)
  {
    $this->db->where($where)->update("tblproject",$ndata);
  }
  
  
 public function insertcomplain($data)
  {
     return $this->db->insert("tblcomplaint",$data);
    
  }
 
  
}