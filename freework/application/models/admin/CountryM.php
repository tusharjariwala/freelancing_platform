<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CountryM extends CI_Model
{
  public function selectAllCountry()
  {
  	return $this->db->get("tblcountry")->result();
  }
  public function insertCountry($data)
  {
  	return $this->db->insert("tblcountry",$data);
  }
  public function deleteCountry($data)
  {
  	return $this->db->delete("tblcountry",$data);
  }
  public function selectByCounId($data)
  {
  	return $this->db->where($data)->get("tblcountry")->result();
  }
  public function updateCoun($newdata,$where)
  {
  	return $this->db->where($where)->update("tblcountry",$newdata);
  }
  public function selectStateById($data)
  {
    return $this->db->where($data)->from("tblcountry c")->join("tblstate s","c.CountryId=s.CountryId")->get()->result();
  }
  public function deleteState($data)
  {
  	return $this->db->delete("tblstate",$data);
  }
  public function insertState($data)
  {
  	return $this->db->insert("tblstate",$data);
  }
   public function selectStateId($data)
  {
    return $this->db->where($data)->get("tblstate")->result();
  }
  public function updateState($newdata,$where)
  {
    return $this->db->where($where)->update("tblstate",$newdata);
  }
  public function selectCityById($data)
  {
    return $this->db->where($data)->from("tblcountry c")->join("tblstate s","c.CountryId=s.CountryId")->join("tblcity ct","ct.StateId=s.StateId")->get()->result();
  }
  public function insertCity($data)
  {
    return $this->db->insert("tblcity",$data);
  }
  public function deleteCity($data)
  {
    return $this->db->delete("tblcity",$data);
  }
    public function selectCityId($data)
  {
    return $this->db->where($data)->get("tblcity")->result();
  }
  public function updateCity($newdata,$where)
  {
    return $this->db->where($where)->update("tblcity",$newdata);
  }
  
}
?>