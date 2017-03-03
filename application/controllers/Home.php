
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		//$data['nama'] = "Dimas Muda Wiradhika";
		$data = array(
				'salam' => "Selamat Datang Di Website" ,
				
				);
		/*$data["tugas"] = array('ngoding','bobo ciang','nugas');*/
		$this->load->view('home', $data);		
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
 ?>