<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('model_app');
        
    }

    
function index()
    {
        $data = "";

        $this->load->view('login', $data);
    }


  function login_akses()
  {

  	$username = trim($this->input->post('username'));
  	$password = md5(trim($this->input->post('password')));
  	
	$akses = $this->db->query("select A.username, B.nama, A.level, B.id_jabatan, C.id_dept FROM user A 
		LEFT JOIN karyawan B ON B.nik = A.username
        LEFT JOIN bagian_departemen C ON C.id_bagian_dept = B.id_bagian_dept
	 WHERE A.username = '$username' AND A.password = '$password'");

    if($akses->num_rows() == 1)
	{
	
	foreach($akses->result_array() as $data)
	{

	$session['id_user'] = $data['username'];
	$session['nama'] = $data['nama'];
	$session['level'] = $data['level'];
	$session['id_jabatan'] = $data['id_jabatan'];
	$session['id_dept'] = $data['id_dept'];
	
	$this->session->set_userdata($session);
    redirect('home');
	}
	
	}
	else
	{
	$this->session->set_flashdata("msg", '<div class="alert bg-danger alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
	<strong>Error!</strong> Username / Password salah, coba periksa kembali.
  </div>');
	redirect('login');
	}

	
  }


  public function logout() {

  $this->session->sess_destroy();

  redirect('login');
    


}


    
}
