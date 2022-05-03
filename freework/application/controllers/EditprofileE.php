<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EditprofileE extends CI_Controller
{
   public function __construct()
   {
   	  parent:: __construct();
   	  $this->load->model("EditProfileM","epm");
      
   }
  public function editProfile()
	{
		$data=array("u.UserId"=>$_SESSION['uid']);
		$temp=array(
       
         "userInfo"=>$this->epm->selectUserInfo($data),
         "cskills"=>$this->epm->checkskills()

		);
    // print_r($temp);
		$this->load->view("Editprofile",$temp);
	
	}
  public function loadOtherUserProfile($id)
  {
     $bdata=$this->epm->selectUserProjects();
      $rating=$this->epm->selectuserrating($id);
       // $rating=$this->epm->selectuserrating($id);
      $ratting=$this->epm->selectrating();
     
     $data=array("u.UserId"=>$id);
    $temp=array(
          "project"=>$bdata,
         "userInfo"=>$this->epm->selectUserInfo($data),
          "cskills"=>$this->epm->Userskills(),
          "FromUserId" => $id,

            "rating" => $rating ? $rating[0]->Rating : "",
        // "rating" => $this->epm->selectuserrating($id),
          "ratinggg"=>$ratting
    );
    $this->load->view("otheruser.php",$temp);
  }
 
  public function loadOtherUserBasic($id)
  {
    $data=array("u.UserId"=>$id);
    $temp=array(
       
         "ourUserInfo"=>$this->epm->selectOurUserInfo($data)

    );
    $this->load->view("ouProfile",$temp);
  
  }
  public function editImage()
  {
    if($_FILES['fup']['name']!="")
    {
       $img=$_FILES['fup']['name'];

     copy($_FILES['fup']['tmp_name'],"C:/xampp1/htdocs/freework/resources/shared/images/".$img) or die("cannot upload images");

     $data=array("ProfilePic"=>$img);
      $_SESSION['propic']=$img;

     $this->epm->updateInfo($data);
     redirect("EditprofileE/editProfile");
    }
  }
	public function editBasic()
	{
          $data=array(
            "UserName"=>$this->input->post("txtUname"),
            "ContactNo"=>$this->input->post("txtCon"),
            "EmailId"=>$this->input->post("txtEmail")
          );
          $_SESSION['uname']=$this->input->post("txtUname");

           $this->epm->updateInfo($data);
             
		   redirect("User");
	}

  public function  editPassword()
  {
     $data=array("UserId"=>$_SESSION['uid']);
     $uinfo=$this->epm->selectUserInfo($data);
     $opwd=$this->input->post("txtOpwd");
     $npwd=$this->input->post("txtNpwd");
     $cpwd=$this->input->post("txtCpwd");

    if($npwd!==$cpwd)
    {
      
        $temp=array(
           "userInfo"=>$uinfo,
           "errMsg"=>"password and confirm password did not match"

    );

      $this->load->view("Editprofile",$temp);
    }
    else
    {
      if($opwd!==$uinfo->Password)
      {
                 
      
            $temp=array(
              "userInfo"=>$uinfo,
              "errMsg"=>"Invalid old Password"
             );
              $this->load->view("Editprofile",$temp);
      }
      else
      {
                $data=array(
             "Password"=>$npwd
                );
              $this->epm->updateInfo($data);

            $temp=array(
              "userInfo"=>$uinfo,
              "errMsg"=>"password successful"
             );
             $this->load->view("Editprofile",$temp);
       
      }
    }
  }
  public function insertuserSkill()
  {
     
     foreach ($this->input->post("txtSkills") as $k) 
     {

        $data=array(
          "UserId"=>$_SESSION['uid'],
          "SkillId"=>$k
         );
        $this->epm->insertSkills($data);
     }
    
  // $skills=$this->input->post("txtSkills");
  // print_r($skils);
  //  foreach ($skills as $s) 
  //   {
  //     $d2=array(
  //      "SkillId"=>$s,
  //      "UserId"=>$_SESSION['uid']
  //     );
  //     $this->epm->insertSkills($d2);
  //   }
    
     redirect("EditprofileE/editProfile");
  }
  public function feedbackuser()
  {
    $this->load->view("feedback");
    
  }
  public function insertfeedback()
  {
    $data = array(
      "FeedbackText" => $this->input->post('txtfeedback'),
      "UserId" => $_SESSION["uid"],
      "Status" => 0
    );
    $this->epm->insertfeedback($data);
    redirect("User");
  }
  public function reviewuser($id)
  {
    $data = array(
      "UserId" => $_SESSION["uid"],
      "review" => $this->input->post("message2"),
      "rating" => $this->input->post("rating"),
      "FromUserId" => $id
    );

    $this->epm->insertreview($data);
    redirect("EditprofileE/loadOtherUserProfile/$id");
  }
 
}