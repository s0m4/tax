<?Php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_login extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		$this->load->model('m_login','',TRUE);
		$this->load->helper('url');
     	$this->load->helper('form');
   		}
		var $title='Admin KKN UMK';
		
		
		public function index()
    	{
		$session_data = $this->session->userdata('tax_admin');
			if($this->session->userdata('tax_admin'))
  				{
					redirect('c_welcome','refresh');
				}else{
					redirect('http://localhost/smartlogicprofix/public/login');
				}
		}
}