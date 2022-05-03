<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller
{
	public function __construct()
	{
        parent:: __construct();
        $this->load->model("ProjectM","pm");
	}
	public function loadAddProject()
	{
		$temp=array(
			"cats"=>$this->pm->selectAllCategory()
		);
		$this->load->view("addproject",$temp);
	}
	public function loadSubCatsByCatId($cid)
	{
		
		$data=array("CategoryId"=>$cid);
		$scats=$this->pm->selectSubCatById($data);
        echo "<option value=-1>Select a sub category</option>";
		foreach ($scats as $c ) 
		{
		?>
		<option value="<?php echo $c->SubCategoryId?>"><?php echo $c->SubCategoryName?></option>
		<?php

		}
	}
	public function loadSkillsBySubCat($sid)
	{
	   $data=array("SubCategoryId"=>$sid);
		$skills=$this->pm->selectAllSkillsBySubCat($data);
       
		foreach ($skills as $s) 
		{
		?>
		<input type="checkbox" name="txtSkills[]" value="<?php echo $s->SkillId?>"><?php echo $s->SkillName?>

		<?php

		}
   }
   public function addProject()
   {
     $img=$_FILES['fup']['name'];
     copy($_FILES['fup']['tmp_name'],"C:/xampp1/htdocs/freework/resources/shared/images/".$img) or die("cannot upload images");

    $data=array(
   	"Title"=>$this->input->post("txttitle"),
    "Description"=>$this->input->post("txtdesc"),
   	"Budget"=>$this->input->post("txtprice"),
   	"SubCategoryId"=>$this->input->post("txtSubCat"),
   	// "CreateDate"=>$this->input->post("txtstarting"),
   	// "EndingDate"=>$this->input->post("txtending"),
    "UserId"=>$_SESSION['uid'],
    "UploadFile"=>$img


   	 );
    $bid=$this->pm->insertProject($data);

    $skills=$this->input->post("txtSkills");
    foreach ($skills as $s) 
    {
      $d2=array(
       "ProjectId"=>$bid,
       "SkillId"=>$s
      );
      $this->pm->insertProjectSkills($d2);	
    }
    redirect("User");
   }
}
?>