<?php
class NotificationM extends CI_Model
{
	public function insertNotificaiton($data)
	{
		$this->db->insert("tblnotification",$data);
	}

	public function getNotifications()
	{
		$data=array("UserId"=>$_SESSION['uid']);
		return $this->db->where($data)->get("tblnotification")->result();
	}
	public function displayNotification()
	{
		 return $this->db->select("*")->from("tblnotification")->get()->result();
	}
	
}
?>