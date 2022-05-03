<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Displayproject extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("DisplayprojectM","dpm");
		$this->load->model("ProjectM","pm");
    $this->load->model("NotificationM","nm");
	}
	public function loadProject()
	{ 

		$bdata=$this->dpm->selectAllProjects();
	 
		$temp=array(
         "project"=>$bdata,
         "cats"=>$this->pm->selectAllCategory(),
          "cskills"=>$this->dpm->checkskills()
        
		);
		
		$this->load->view("displayproject",$temp);
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
	
  public function loadBidById($id)
    {
      $data=array("ProjectId"=>$id);
      $d2=array(
          "UserId"=>$_SESSION['uid'],
          "ProjectId"=>$id
      );
        $count=count($this->dpm->checksave($d2));
        if($count==0)
          $saveStatus="no";
        else
          $saveStatus="yes";
      $d3=array("ProjectId"=>$id);
      $bdata=$this->dpm->selectProjectByUser($_SESSION['uid']);
      $temp=array(
        "bids"=>$this->dpm->selectBidById($id),
        "Project"=> $this->pm->selectProjectById($id),
       "bidsadd"=>$this->dpm->loadbidById($data),
        "skilld"=>$this->dpm->loadskills($data),
        "saveStatus"=>$saveStatus,
        "hasBid" => $this->dpm->hadBid($_SESSION['uid'], $data["ProjectId"]),
        "UserId"=>$_SESSION['uid'],
        "ProjectUid"=>$this->dpm->getProjectUid($id),
        "cskills"=>$this->dpm->checkskills(),
        "projects"=>$bdata,
        "updates"=>$this->dpm->getProjectUpdates(array("ProjectId"=>$id))
         //"upproject"=>$this->dpm->updateprojectdetails($id)
        
      );
     
      $this->load->view("projectbid",$temp);
   }

  public function addBid($id)
  {
  	  $data=array(
     "ProjectId"=>$id,
     "UserId"=>$_SESSION['uid'],
     "Message"=>$this->input->post('txtMess'),
     "Budget"=>$this->input->post('txtbudget'),
     "CreateDate"=>$this->input->post('txtcreatedate')
     // "addbidss"=>$this->dpm->checkbid($data)
     );
      $ndata=array("projectid"=>$id);
      $pInfo=$this->dpm->getProjectByProjectID($ndata);
      print_r($pInfo);

      $str=$_SESSION['uname']." posted a bid on your project ".$pInfo[0]->Title;
      $notidata=array(
        "userid"=>$pInfo[0]->UserId,
        "Notification"=>$str
      );
      $this->nm->insertNotificaiton($notidata);
      $this->dpm->insertBid($data);

     redirect("Displayproject/loadBidById/$id");
  }
  public function removebid($id)
  {
     $data=array(
        "UserId"=>$_SESSION['uid'],
        "ProjectId"=>$id
      );
      $this->dpm->deleteBid($data);
     redirect("Displayproject/loadBidById/$id");
  }

  public function approvebid($id)
  {

    $binfo=$this->dpm->getBidInfo(array("ProjectBidId"=>$id));
     $data=array(
        "ProjectId"=>$binfo->ProjectId,
        "UserId"=>$binfo->UserId,
        "Budget"=>$binfo->Budget,
        "FromUserId"=>$_SESSION['uid']
      );
    
     // $this->load->view("Approvalproject", array('fromUserId'=>$_SESSION['uid']));
      $this->dpm->insertapproval($data);
      $where=array("ProjectId"=>$binfo->ProjectId);
      $ndata=array("Status"=>1);
      $this->dpm->updateProjectStatus($where,$ndata);
     redirect("Displayproject/loadBidById/".$binfo->ProjectId);
  }
   
  public function SaveProject($id)
    {
      $data=array(
        "UserId"=>$_SESSION['uid'],
        "ProjectId"=>$id
      );
      
      $this->dpm->Saveproject($data);
     redirect("Displayproject/loadBidById/$id");
    }

  public function unSaveProject($id)
  {
    $data=array(
        "UserId"=>$_SESSION['uid'],
        "ProjectId"=>$id
      );
      
      $this->dpm->deleteSaveProject($data);
    redirect("Displayproject/loadBidById/$id");
  }
  public function allSaveProject()
  { 
       
      $data=array("UserId"=>$_SESSION['uid']);
    $saveProjects=$this->dpm->checksave($data);

    $saveProjectsId=array();
    foreach ($saveProjects as $s) {
      $saveProjectsId[]=$s->ProjectId;     
    }
    if($saveProjectsId!=NULL)
    {
    $temp=array(
      "saves"=>$this->dpm->selectsaveProjectDetail($saveProjectsId),
        "cskills"=>$this->dpm->checkskills()
    );
    $this->load->view("saveproject",$temp);
    }
    else
    {

       $this->load->view('errorpage');
    }
  }
  public function myProject()
  {
    $bdata=$this->dpm->selectProjectByUser($_SESSION['uid']);
   
    $temp=array(
         "project"=>$bdata,
        "cats"=>$this->pm->selectAllCategory(),
         "UserId"=>$_SESSION['uid'],
         "cskills"=>$this->dpm->checkskills()
       );
    $this->load->view("myproject",$temp);
  }
  public function loadEditProject($id)
  {
    $data=array("ProjectId"=>$id);
    $temp=array(
        "projectinfo"=>$this->dpm->selectmyproject($data)
    );
    $this->load->view("Updateproject.php",$temp);
  }
  public function editProject($id)
  { 
     $img=$_FILES['fup']['name'];
     copy($_FILES['fup']['tmp_name'],"C:/xampp1/htdocs/freework/resources/shared/images/".$img) or die("cannot upload images");

        $where=array("ProjectId"=>$id);
        $newdata=array(
          "ProjectId" => $id,
          "Title"=>$this->input->post("txtTitle"),
          "Description"=>$this->input->post("txtDesc"),
          "UploadFile"=>$img,
          "UserId"=>$_SESSION['uid']
       );
        $this->dpm->updateProject($newdata, $where);
        redirect("Displayproject/loadBidById/$id");
  }
  public function notificationdisplay()
  { 
   
    $data=array(
    "notifi"=>$this->nm->displayNotification()
  );
    $this->load->view("notification.php",$data);
  }
  
  public function addComplaint($uid,$pid)
  {
     $data=array(
        "Subject"=>$this->input->post("txtSubject"),
        "Message"=>$this->input->post("txtMessage"),
        "FromUserId"=>$_SESSION['uid'],
        "UserId"=>$uid,
         "ProjectId"=>$pid
      );
      $this->dpm->insertcomplain($data);
      redirect("User");
  }
  public function loadAddComplaint($uid,$pid)
  {
    $temp=array(
        "uid"=>$uid,
        "pid"=>$pid
    );
    $this->load->view("complain.php",$temp);
  }

}
?>
