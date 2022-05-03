<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Country extends CI_Controller
{
	public function __construct()
	{
	 parent:: __construct();
    $this->load->model("admin/CountryM","cm");
	}
	public function index()
	{
		$temp=array(
         "coun"=>$this->cm->selectAllCountry()
		);
		$this->load->view("admin/allCountry",$temp);
	}
	public function loadAddCoun()
	{
		$this->load->view("admin/addCountry");

	}
	public function addCountry()
	{
		$data=array(
         "CountryName"=>$this->input->post("txtCounName")
		);
		$this->cm->insertCountry($data);
       redirect("admin/Country");
	}
	public function removeCountry($id)
	{
		$data=array("CountryId"=>$id);
		$this->cm->deleteCountry($data);
		redirect("admin/Country");
	}
	public function loadEditCoun($id)
	{
		$data=array("CountryId"=>$id);
		$temp=array(
        "Couninfo"=>$this->cm->selectByCounId($data)
		);

        $this->load->view("admin/updCountry",$temp);
	} 
	public function editCountry($id)
	{
        $where=array("CountryId"=>$id);
        $newdata=array(
        	"CountryName"=>$this->input->post("txtCounName")
       );
        $this->cm->updateCoun($newdata,$where);
        redirect("admin/Country");
	}
	public function loadAllStateId($id)
	{
		$data=array("c.CountryId"=>$id);
		$temp=array(
          "stateinfo"=>$this->cm->selectStateById($data),
			"CountryId"=>$id
		);

		$this->load->view("admin/allState",$temp);

	}
	public function removeState($sid,$cid)
	{
     $data=array("StateId"=>$sid);
     $this->cm->deleteState($data);
     redirect("admin/Country/loadAllStateId/$cid");
	}
	public function loadAddState($cid)
	{
		$temp=array("CountryId"=>$cid);
		$this->load->view("admin/addState",$temp);
	}
	public function addState($cid)
	{
       $data=array(
       	"StateName"=>$this->input->post("txtStatname"),
        "CountryId"=>$cid
       );
       $this->cm->insertState($data);
       redirect("admin/Country/loadAddState/".$cid);
	}
	public function loadState($id)
	{
		$temp=array("StateId"=>$id);
		$data=array(
			"stateinfo"=>$this->cm->selectStateId($temp)
		);
        $this->load->view("admin/updState",$data);
	}
	public function editState($id)
	{
        $where=array("StateId"=>$id);
        $newdata=array(
        "StateName"=>$this->input->post("txtstatename")
    );
        $this->cm->updateState($newdata,$where);
        redirect("admin/Country");

	}
	public function loadAllCityId($id)
	{
		$data=array("s.StateId"=>$id);
		$temp=array(

			"Cityinfo"=>$this->cm->selectCityById($data),
			"StateId"=>$id

		);
		$this->load->view("admin/allCity",$temp);
	}
	public function loadAddCity($sid)
	{
		$temp=array("StateId"=>$sid);
		$this->load->view("admin/addCity",$temp);
	}
	public function addCity($sid)
	{
		$data=array(
        "CityName"=>$this->input->post("txtCtName"),
        "StateId"=>$sid
		);
		$this->cm->insertCity($data);
		redirect("admin/Country/loadAddCity/".$sid);
	}
	public function removeCity($sid,$cid)
	{
		$data=array("CityId"=>$cid);
		$this->cm->deleteCity($data);
		redirect("admin/Country/loadAllCityId/$sid");
	}
   public function loadCity($id)
	{
		$temp=array("CityId"=>$id);
		$data=array(
			"Cityinfo"=>$this->cm->selectCityId($temp)
		);
        $this->load->view("admin/updCity",$data);
	}
	public function editCity($id)
	{
        $where=array("CityId"=>$id);
        $newdata=array(
        "CityName"=>$this->input->post("txtCityname")
    );
        $this->cm->updateCity($newdata,$where);
        redirect("admin/Country");

	}
}
?>