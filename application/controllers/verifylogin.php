<?php session_start(); if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Verifylogin extends CI_Controller {
	 function __construct()
	 {
	   parent::__construct();
	   $this->load->model('m_login','',TRUE);
	 }

	 function index()
	 {
  	   	$this->form_validation->set_rules('email', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
	   if($this->form_validation->run() == FALSE)
	   {
	     echo "<script type=\"text/javascript\">alert('Maaf Email dan password salah');
		 		window.location = \"c_login\"</script>";
	   }
	   else
	   {
				redirect('c_welcome', 'refresh');
			     //Go to private area     
	   }
	 }

	function logout()
	{
		$s_user = $this->session->userdata('tax_admin');
	   	$this->session->unset_userdata('tax_admin');
	   	$this->session->sess_destroy();
	   	redirect('c_login', 'refresh');
	 }	  
			
	 function check_database($password)
	 {
	 $usernam = $this->input->post('email');
	 $username= htmlentities(addslashes($usernam));
	 $passwd=htmlentities(addslashes($password));		
	 $passwords=md5($passwd);
	 

	
		$result = $this->m_login->login($username,$passwords);
	   		if($result)
	   		{
				$sess_array = array();
	     		foreach($result as $row)
	     		{
					$status		= $row->status_aktif;
					$id_user	= $row->id;
					$nama 		= $row->first_name;
						
	       			$sess_array = array(
			 					'id_user' => $id_user,
								'nama' => $nama
		   					  			);					
		  			date_default_timezone_set('Asia/Jakarta');
		   			$tgl_skg = date("Y:m:d H:i:s");
	       			$this->session->set_userdata('tax_admin', $sess_array);  		
				}
			return TRUE;  
	 		}else{
	        	echo "<script type=\"text/javascript\">alert('Maaf anda tidak terdaftar dalam sistem ini');
					window.location = \"c_login\"</script>";
	   		}
	}
	   //query the database
 	}

	?>