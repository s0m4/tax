<?php
	Class M_login extends CI_Model
	{
	 
	 function login($username, $passwords)
	 {
	  	$query=$this->db->query("SELECT * FROM users WHERE email='$username' AND password ='$passwords'");
			if ($query->num_rows() > 0)
			{
				return $query->result();
			}else{
			   return false;
			}
	 }
	 
	 
	 function ajar(){
	$result= $this->db->query("SELECT tak.id_tahun_akademik ID, tah.tahun_ajaran TA, tis.tipe_semester SMT FROM tbltahunakademik tak, tbltahunajaran tah, tbltipesemester tis WHERE tak.id_tahun_ajaran=tah.id_tahun_ajaran AND tak.id_tipe_semester=tis.id_tipe_semester AND tak.status_aktif='1'");
		if ($result->num_rows() > 0 ){
			return $result->result_array();	
		}
		else{
			return array();	
		}
	}

	  function sesi_login($ses_id, $id_user, $nama_lengkap, $tgl_skg)
	 {
		 $query=$this->db->query("select * from m_session where isi_session='$ses_id' ");
		  if ($query->num_rows() > 0)
		{
	     $this->db->query("delete from m_session where isi_session='$ses_id'");
		  $this->db->query("insert into m_session (id_session,isi_session,id_user,nama_session,tgl_login) values ('','$ses_id','$id_user', '$nama_lengkap', '$tgl_skg')");
	   }
	   else
	   {
	 $this->db->query("INSERT INTO m_session VALUES ('','$ses_id', '$id_user', '$nama_lengkap', '$tgl_skg')");
	   } 
	 }

	 function hapus_sesi($acak)
	 {
		 $this->db->query("delete from m_session where isi_session='$acak'");
	 }
	 function menu($user_id){
	$result= $this->db->query("SELECT uh.*, h.* FROM m_user u JOIN m_role r ON (u.id_role=r.id_role) 
					  JOIN m_userheader uh ON (r.id_role=uh.id_role) 
					  JOIN m_headermenu h ON (uh.id_headermenu=h.id_headermenu) 
					  WHERE uh.status_userheader='1' AND u.id_user='$user_id' 
					  ORDER BY h.urutan ASC");
		if ($result->num_rows() > 0 ){
			return $result->result_array();	
		}
		else{
			return array();	
		}
	}
	
	 function sub_menu($user_id,$menuu){
	$result= $this->db->query("SELECT ug.*, g.* FROM m_user u JOIN m_role r ON (u.id_role=r.id_role) 
								  JOIN m_usergrup ug ON (r.id_role=ug.id_role) 
								  JOIN m_grupmenu g ON (ug.id_grupmenu=g.id_grupmenu) 
								  WHERE ug.status_usergrup='1' AND u.id_user='$user_id' AND g.id_headermenu ='$menuu' 
								  ORDER BY g.id_grupmenu ASC");
		if ($result->num_rows() > 0 ){
			return $result->result_array();	
		}
		else{
			return array();	
		}
	}

function cek_situs(){			
		return $query = $this->db->query("SELECT * from tblstatussitus");	
	}
	
	 function baca_sesi($acak)
	 {
		return $query=$this->db->query("select s.*,m.* from m_session s join tblmahasiswa m where s.id_user=m.nim and s.isi_session='$acak'");
		if ($query->num_rows() > 0)
		{
			return TRUE;
		}else{
			return FALSE;
		}
	 }
	}

	?>