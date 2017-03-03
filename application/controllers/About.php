
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$identitas = array(
				'nama' => "Nama : Dimas Muda Wiradhika" ,
				'nim' => "NIM   : 1541180106" ,
				'umur' => "Umur : 20" ,
				'ttl' => "ttl : 16 Desember 1996, Malang" ,
				'alamat' => "Alamat : Malang" ,
				'hoby' => "Hoby : Olahraga" ,
				'no_telp' => "No Telp : 081357430970" ,
				);
		$this->load->view('about', $identitas);		
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
 ?>