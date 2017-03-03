
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function index($jumlahberita)
	{
		$data = array();
		$data ['jumlahberita'] = $jumlahberita;
		$this->load->view('news', $data);
	}
}

/* End of file News.php */
/* Location: ./application/controllers/News.php */
 ?>