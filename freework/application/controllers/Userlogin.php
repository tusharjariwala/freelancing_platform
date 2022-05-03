<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userlogin extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();
	   $this->load->model("UserM","um");
		
	}
	public function index()
	{
		$this->load->view("login.php");
	}
	public function Validatelogin()
	{
		
       $data=array(
       
      "EmailId"=>$this->input->post("txtemail"),
      "Password"=>$this->input->post("txtpwd")
       );
       $loggin=$this->um->LoginData($data);

         
         if(count($loggin)>0)
         {
            $_SESSION['uid']=$loggin[0]->UserId;
            $_SESSION['uname']=$loggin[0]->UserName;
         	$_SESSION['ename']=$loggin[0]->EmailId;
         	$_SESSION['pass']=$loggin[0]->Password;
            $_SESSION['propic']=$loggin[0]->ProfilePic;
            
         	 redirect("User");
         }
         else
         {
         	$temp=array("LoginErr" =>"invalid Email and password");
              $this->load->view("login",$temp);

         }
	}
	public function loadReg()
	{
		$temp=array(
		"citys"=>$this->um->selectAllCity()
             );
		$this->load->view("reg",$temp);
	}
	public function RegisterUser()
	{
		 $img=$_FILES['fups']['name'];
		 copy($_FILES['fups']['tmp_name'], "C:/xampp1/htdocs/freework/resources/shared/images/".$img) or die("cannot upload file");

		 $temp=array(
		"citys"=>$this->um->selectAllCity()
             );

		$data=array(
          "UserName"=>$this->input->post("txtUname"),
         "EmailId"=>$this->input->post("txtemail"),
         "Password"=>$this->input->post("txtpwd"),
          "ProfilePic"=>$img,
          "ContactNo"=>$this->input->post("txtcont"),
          "CityId"=>$this->input->post("txtctyname")
       


       );

		$this->um->insertUser($data);
		
	  redirect("Userlogin");
	}
	public function logout()
	{
		session_destroy();
		redirect("Userlogin");
	}

	public function resetPassword($id=NULL) 
	{     
      if($id !== NULL) {
      	$this->load->view("confirmpassword");
      }
      else {
      	$this->load->view("resetpass");
      }

	}

	public function sendMail() {
		// send mail to user
		$email = $this->input->post("txtemail");
		$userId = $this->um->getUserId($email)[0]->UserId;
		redirect("UserLogin/resetPassword/" . $userId);
	}

	public function changePassword()
	 {
    // $email = $this->input->post("txtemail");
		$uinfo=$this->um->getUserId($email);
	     $npwd=$this->input->post("txtNpwd");
         $cpwd=$this->input->post("txtCpwd");
         
         if($npwd!==$cpwd)
         {
         	$temp=array(
           "userinfo"=>$uinfo,
             "errMsg"=>"password and confirm password not match"
         	);
            $this->load->view("confirmpassword");
         }
         else
         {
             $data=array("password"=>$npwd );
              $this->um->updateUser($data);

		        $temp=array(
              "userInfo"=>$uinfo,
              "errMsg"=>"password successful"
             );
             $this->load->view("confirmpassword",$temp);
             redirect("UserLogin");
         }

	}
	
}
?>