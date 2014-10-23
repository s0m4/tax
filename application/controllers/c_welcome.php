<?Php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_welcome extends CI_Controller
{
     public function __construct()
		{
		parent::__construct();
		$this->load->model('m_login','',TRUE);
		$this->load->helper('url');
     	$this->load->helper('form');
   		}
		   	var $title='Smart Logic Pro';
/////////////////////////////////////////////////////////////////////////////////////////////////////			
			public function index()
    		{
			$session_data = $this->session->userdata('tax_admin');
				if($this->session->userdata('tax_admin'))
  				{
					$data['title']=$this->title;
					$data['menu']=$this->load->view('menu/menu_admin',$data,TRUE);
					$data['contents']=$this->load->view('home/home',$data,TRUE);
	  				$this->load->view('template',$data);
				}else{
					redirect('c_login','refresh');
				}
			}


}