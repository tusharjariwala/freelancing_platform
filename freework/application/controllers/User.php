<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{

		parent:: __construct();
		 $this->load->model("UserM","um");
		if(!isset($_SESSION['uname']))
		{
          redirect('Userlogin');
		}
		
	}
	public function index()
	{
		$data=array(
     	 "cates"=>$this->um->displayCat()
		);
		$this->load->view("indexhome.php",$data);
	}
	
}

?>