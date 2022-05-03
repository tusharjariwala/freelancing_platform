<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller
{

  public function __construct()
  {
    parent:: __construct();
    $this->load->model("admin/CategoryM","cm");
  }
  public function index()
  {
  	$temp=array(
     "cat"=>$this->cm->selectAllCategory()
  	);
    $this->load->view("admin/allcategory",$temp);
  }
  public function loadAddCate()
  {
  	$this->load->view("admin/addCate");
  }
  public  function addCategory()
  {
  	$data=array(
     "CategoryName"=>$this->input->post("txtCatname")
  	);
  	$this->cm->insertCategory($data);
  	redirect("admin/Category");

  }
  public function removeCategory($id)
  {
    $data=array("CategoryId"=>$id);
    $this->cm->deletCategory($data);
    redirect("admin/Category");
  }
  public function loadEditCat($id)
  {
    $data=array("CategoryId"=>$id);
    $temp=array(
     "Cateinfo"=>$this->cm->selectCatById($data)
    );
    $this->load->view("admin/updcategory",$temp);
  }
  public function editCategory($id)
  { 
     $where=array("CategoryId"=>$id);
     $newdata=array(
       "CategoryName"=>$this->input->post("txtCatname"));
 
    $this->cm->updateCat($newdata,$where);
    redirect("admin/Category");
  }
  public function loadAllSubCatById($id)
  {
    $data=array("sc.CategoryId"=>$id);
    $temp=array(
    "subcats"=>$this->cm->selectSubCatById($data),
    "CategoryId"=>$id

    );
     $this->load->view("admin/allSubCat",$temp);
  }
  public function removeSubcat($sid,$cid)
  {
    $data=array("SubCategoryId"=>$sid);
    $this->cm->deleteSubCat($data);
    redirect("admin/Category/loadAllSubCatById/$cid");
  }
  public function loadAddSubCat($cid)
  {
    $temp=array("CategoryId"=>$cid);
   $this->load->view("admin/addSubCat",$temp);
  }
  public function addSubCat($cid)
  { 
    $data=array(
    "SubCategoryName"=>$this->input->post("txtSubCatName"),
    "CategoryId"=>$cid
    );
    $this->cm->insertSubCategory($data);
    redirect("admin/Category/loadAllSubCatById/".$cid);

  }
  public function loadEditSubsCat($id)
  {
    $data=array("SubCategoryId"=>$id);
     $temp=array(
      "SubCatInfo"=>$this->cm->selectSubById($data)

    );
     $this->load->view("admin/updSubcate",$temp);
  }
  public function editSubCategory($id)
  {
     $where=array("SubCategoryId"=>$id);
     $newdata=array(
    "SubCategoryName"=>$this->input->post("txtSubCatName")
   );
    $this->cm->updateSubcat($newdata,$where);
    redirect("admin/Category");
    }




}
?>