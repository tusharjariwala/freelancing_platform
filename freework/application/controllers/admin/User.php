<?php

 defined('BASEPATH') OR exit('No direct script access allowed');

  class User extends CI_Controller
  {
     public function __construct()
     {
     	parent:: __construct();
     	$this->load->model("admin/UserM","um");
     }
     public function index()
     {   
  
     	$temp=array(
        "users"=>$this->um->selectAllUser()
     	);
     	$this->load->view("admin/alluser",$temp);
     }
     public function feedback()
     {
       $temp=array(
        "feed"=>$this->um->selectAllfeedback()
       );
       $this->load->view("admin/allfeedback",$temp);
     }
     public function complaint()
     {
      $temp=array(
       "complainn"=>$this->um->selectAllComplain()
      );
      $this->load->view("admin/allcomplain",$temp);
     }
  }

?>