<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();
       $this->load->model("admin/LoginM","lm");

	}
	public function index()
	{
	  $this->load->view("admin/login");
    }
      public function validatelogin()
      {
          $data=array(
          "EmailId"=>$this->input->post("txtEmail"),
          "Password"=>$this->input->post("txtPwd")
          
          );

          $loggin=$this->lm->selectLoginData($data);
          if(count($loggin)>0)
          {
          	  $_SESSION['aid']=$loggin[0]->AdminId;
            $_SESSION['aname']=$loggin[0]->UserName;
            $_SESSION['profpic']=$loggin[0]->ProfilePic;
            
             redirect("admin/Home");

          }
          else
          {
            $temp=array("loginErr"=>"invalid username and password");
            $this->load->view("admin/login",$temp);
          }

      }
  public function logout()
  {
    session_destroy();
    redirect("admin/Login");
  }
     
}

?>