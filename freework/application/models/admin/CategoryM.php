<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CategoryM extends CI_Model
{
   public function selectAllCategory()
   {
         return $this->db->get("tblcategory")->result();
   }
    public function insertCategory($data)
   {
         return $this->db->insert("tblcategory",$data);
   }
   public function deletCategory($data)
   {
         return $this->db->delete("tblcategory",$data);
   }
   public function selectCatById($data)
   {
   	return $this->db->where($data)->get("tblcategory")->result();
   }
    public function updateCat($newdata,$where)
   {
   	return $this->db->where($where)->update("tblcategory",$newdata);
   }
   public function selectSubCatById($data)
   {
     return $this->db->where($data)->from("tblsubcategory sc")->join("tblcategory c","c.CategoryId=sc.CategoryId")->get()->result();
   }
   public function deleteSubCat($data)
   {
   	 return $this->db->delete("tblsubcategory",$data);
   }

   public function insertSubCategory($data)
   {
   	  return $this->db->insert("tblsubcategory",$data);
   }
    public function selectSubById($data)
   {
      return $this->db->where($data)->get("tblsubcategory")->result();
   }
   public function updateSubcat($newdata,$where)
   {
      return $this->db->where($where)->update("tblsubcategory",$newdata);
   }
}
?>