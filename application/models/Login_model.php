<?php
class Login_model extends CI_Model
{
	function can_login($username, $password)
	{
		$this->db->where('username', $username);
		$query = $this->db->get('user');
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$store_password = $this->encrypt->decode($row->password);
				echo $this->encrypt->encode($password);
				if ($password == $store_password) {
					$this->session->set_userdata('id', $row->id);
				} else {
					return 'Wrong Password';
				}
			}
		} else {
			return 'Wrong Email Address';
		}
	}
}
