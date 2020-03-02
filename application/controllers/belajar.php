<!---->memanggil helper HTML
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Belajar extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('html');
	}
 
	public function index(){		
		$this->load->view('view_belajar');
	}
}
//menampilkan view
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Belajar extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		
	}
 
	public function index(){
		echo "ini method index pada controller belajar | cara membuat controller pada codeigniter | MalasNgoding.com";
	}
 
	public function halo(){
		$this->load->view('view_belajar');
	}
 
}
//menghubungkan CodeIgniter ke database
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Belajar extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
	}
 
	function user(){
		$data['user'] = $this->m_data->ambil_data()->result();
		$this->load->view('v_user.php',$data);
	}
 
}