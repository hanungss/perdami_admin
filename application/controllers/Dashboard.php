<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Dashboard extends CI_Controller
{
	
	public function __construct()
	{
		$jenis = "1";
		parent:: __construct();
		$this->load->database();
		$this->load->helper(array('form','url','file','download','html'));
		$this->load->model('admin');
		$this->load->library('form_validation');
		
	}

	public function index()
	{
		if($this->admin->logged_id()){
			redirect("dashboard/profil");
		}else{
			redirect("login");
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect("login");
	}

	public function daftar()
	{
		$this->load->view('daftar', array('error' => ' ' ));
	}

	public function admin()
	{
		if($this->admin->logged_id()){
		$this->load->model("admin");
		$query['profil'] = $this->admin->get_data_user();
		$query['cek_admin'] = $this->admin->get_data_all();
		$query['cek_all_user'] = $this->admin->get_data_all_user();
		$query['cek_notifikasi'] = $this->admin->get_data_notifikasi();
		$this->load->view('admin',$query);
		}else{
			redirect("login");
		}
	}

	public function checkbox(){
		$check = $this->input->post('check_list');
		foreach ($check as $object) {
			$this->admin->insert_checkbox(array (
				'option' => $object 
			));
		}
		redirect();
	}


	public function approve(){
		$data = array(				
			'email' => $this->input->post('email'),
			'status_lengkap' => $this->input->post('kelengkapan'),
			'status' => $this->input->post('status')
		);
        $urut= $this->input->post('id_user');
        $sesi=$this->session->userdata('user_nama');
        $status = $this->input->post('status');
        $keterangan = $this->input->post('keterangan');
        $kelengkapan = $this->input->post('kelengkapan');

        $this->admin->kirim_notifikasi($data);
        $query = $this->db->query("UPDATE status SET status = '$status', keterangan = '$keterangan', kelengkapan = '$kelengkapan', verifikator = '$sesi' WHERE `status`.`id_status` = '$urut'");
        $query = $this->db->query("UPDATE file SET pernah_baca = '$sesi' WHERE `file`.`id_file` = '$urut'");
        // $this->db->where('id_status',$urut);
        // $this->db->update('status',array('status'=>$status, 'keterangan'=>$keterangan, 'verifikator'=>$sesi));
        redirect('dashboard/pengajuan');
	}

	public function baca(){
		$urut=$this->session->userdata('user_id');
		$sesi=$this->session->userdata('user_nama');
		$query = $this->db->query("UPDATE file SET pernah_baca = '$sesi' WHERE `file`.`id_file` = '$urut'");
		redirect('dashboard/pengajuan');
	}

	public function verifikasi()
	{
		if($this->admin->logged_id()){
		$this->load->model("admin");
		$query['cek_all_user'] = $this->admin->verifikasi();
		$query['cek_notifikasi'] = $this->admin->get_data_notifikasi();
		$data['total_skore'] = $this->admin->hitungJumlahSkore($id_status);
		}else{
			redirect("dashboard/terverifikasi");
		}
	}

	public function dokter()
	{
		if($this->admin->logged_id()){
		$this->load->model("admin");
		$query['profil'] = $this->admin->get_data_user();
		$query['cek_all_user'] = $this->admin->get_data_all_user();
		$query['cek_notifikasi'] = $this->admin->get_data_notifikasi();
		$this->load->view('dokter',$query);
		}else{
			redirect("login");
		}
	}

	public function pengajuan()
	{
		if($this->admin->logged_id()){
		$this->load->model("admin");
		$id_file = $this->input->post('id_file');
		$berkas = $this->admin->view_by_id_file($id_file);
		$query['profil'] = $this->admin->get_data_user();
		$query['file'] = $this->admin->get_berkas_file();
		$query['cek_all_pengajuan'] = $this->admin->pengajuan(); //get_all_pengajuan
		$query['cek_skore'] = $this->admin->get_all_skore();
		$query['cek_notifikasi'] = $this->admin->get_data_notifikasi();
		$this->load->view('pengajuan',$query);
		}else{
			redirect("login");
		}
	}

	public function terverifikasi()
	{
		if($this->admin->logged_id()){
		$this->load->model("admin");
		$query['profil'] = $this->admin->get_data_user();
		$query['cek_terverifikasi'] = $this->admin->get_verifikasi();
		$query['cek_notifikasi'] = $this->admin->get_data_notifikasi();
		$this->load->view('terverifikasi',$query);
		}else{
			redirect("login");
		}
	}

	public function sertifikat($id_user){
    	if($this->admin->logged_id()){
    	$this->load->model("admin");
    	$query['cek_terverifikasi'] = $this->admin->get_tanggal_verifikasi($id_user);
    	$query['dokter'] = $this->admin->get_dokter($id_user);
    	$query['sertifikat'] = $this->admin->seri_sertifikat($id_user);
    	$this->load->view('sertifikat', $query);
    	}else{
		redirect("login");
		}
    }

	public function pengaturan()
	{
		if($this->admin->logged_id()){
		$this->load->model("admin");
		$query['profil'] = $this->admin->get_data_user();
		$query['cek_notifikasi'] = $this->admin->get_data_notifikasi();
		$this->load->view('pengaturan',$query);
		}else{
			redirect("login");
		}
	}

	public function tambah_admin()
	{
		$jenis = $this->session->userdata("user_jenis");
		if(!$jenis = "1"){
			redirect("dashboard/admin");
		}else{			
			$this->load->model("admin");
			$query['profil'] = $this->admin->get_data_user();
			$this->load->view('tambah_admin',$query);
		}
	}

	public function rule()
	{
		$this->form_validation->set_rules('nama_user', 'Nama User', 'trim|required');
		$this->form_validation->set_rules('no_anggota', 'Nomor Anggota', 'trim|required');
		$this->form_validation->set_rules('no_hp', 'Nomor Telp', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('cabang', 'Cabang', 'trim|required');
		$this->form_validation->set_rules('instansi', 'Instansi', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password','PASSWORD','required');
        $this->form_validation->set_rules('password_conf','PASSWORD','required|matches[password]');
        $this->form_validation->set_rules('foto', 'Foto', 'trim|required');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	}
       

     function do_upload(){
    
		$config['upload_path']          = FCPATH.'/Upload/foto/';
		$config['allowed_types']        = 'jpeg|gif|jpg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 10024;
		$config['max_height']           = 76008;
		$this->load->library('upload',$config); 
		
		if ( !$this->upload->do_upload('userfile'))
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('daftar', $error);
		}
		else
		{
			$file = $this->upload->data();
			$data = array(
				
				'nama_admin' => $this->input->post('nama_admin'),
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
				'email' => $this->input->post('email'),
				'jenis_admin' => $this->input->post('jenis_admin'),
				'foto' => $this->upload->data('file_name')
			);
			
			$this->admin->daftar($data);

			$pesan['message'] =    "Pendaftaran berhasil";

			redirect('dashboard/admin',$pesan);
		}        
     }

	function profil(){
		if($this->admin->logged_id()){
		$this->load->model("admin");
		$query['profil'] = $this->admin->get_data_user();
		$query['cek_status'] = $this->admin->get_data_limit();
		$query['status_terakhir'] = $this->admin->get_tanggal();
		$aceh['member'] = $this->admin->get_member();
		$query['cek_notifikasi'] = $this->admin->get_data_notifikasi();
		$this->load->view('profil', $query);
		}else{
			redirect("login");
		}
	}

	function remove_user($id_user){

		$file=$this->db->get_where('user',array('id_user'=>$id_user));

		if($file->num_rows()>0){
			$hasil=$file->row();
			$berkas=$hasil->foto;
			if(file_exists($file=FCPATH.'/Upload/foto/'.$berkas)){
				unlink($file);
			}

			$this->db->delete('user',array('id_user'=>$id_user));
			redirect("dashboard/dokter");
		}	

	}

	function remove_dokter($id_user){

		$file=$this->db->get_where('user',array('id_user'=>$id_user));

		if($file->num_rows()>0){
			$hasil=$file->row();
			$berkas=$hasil->foto;
			if(file_exists($file=FCPATH.'/Upload/foto/'.$berkas)){
				unlink($file);
			}

			$this->db->delete('user',array('id_user'=>$id_user));
			redirect("dashboard/dokter");
		}	

	}

	function hapus_pengajuan($id_row){
		$this->db->delete('status',array('id_row'=>$id_row));
		redirectPreviousPage();
	}

	function mark_file($id_row){ 
		$sesi=$this->session->userdata('user_nama');
		$file=$this->db->get_where('file',array('id_row'=>$id_row, 'id_file'=>$id_file)); 
		$query=$this->db->query("UPDATE file SET pernah_baca='$sesi',tandai='OK' WHERE id_row='$id_row'");
		$query=$this->db->query("SELECT id_file FROM file WHERE id_row='$id_row'");
		redirectPreviousPage();
	}


	public function detail_dokter($id_user)
    {

    	if($this->admin->logged_id()){
		$this->load->model("admin");
		$query['profil'] = $this->admin->get_data_user();
		$query['cek_status'] = $this->admin->get_data_limit();
		$query['status_terakhir'] = $this->admin->get_tanggal();
		$query['dokter'] = $this->admin->get_dokter($id_user);
		$query['file'] = $this->admin->get_file($id_user);
		$query['cek_notifikasi'] = $this->admin->get_data_notifikasi();
		$this->load->view('detail_dokter', $query);
		}else{
			redirect("login");
		}
    }

    public function download ($file_path = "Upload/user/") {
            // load ci download helder
		$this->load->helper('download'); 
            // get download file path and store it in $data array
		$data['download_file'] = $file_path;    
        $data = file_get_contents(base_url("/Upload/user".$download_file)); // Read the file's contents
        $name = $download_file;
        force_download($name, $data);                   
    }

    public function detail_pengajuan($id_user)
    {

    	if($this->admin->logged_id()){
		$this->load->model("admin");
		$query['profil'] = $this->admin->get_data_user();
		$query['cek_status'] = $this->admin->get_data_limit();
		$query['status_terakhir'] = $this->admin->get_tanggal();
		$query['cek_all_pengajuan'] = $this->admin->get_data_pengajuan();
		$query['nama_status'] = $this->admin->get_nama_status($id_user);
		$query['dokter'] = $this->admin->get_dokter($id_user);
		$query['file_satu'] = $this->admin->get_file_kel_1($id_user);
		$query['file_dua'] = $this->admin->get_file_kel_2($id_user);
		$query['cek_notifikasi'] = $this->admin->get_data_notifikasi();
		$this->load->view('detail_pengajuan', $query);
		}else{
			redirect("login");
		}
    }


	function remove_admin($id_admin){

		$file=$this->db->get_where('admin',array('id_admin'=>$id_admin));

		if($file->num_rows()>0){
			$hasil=$file->row();
			$berkas=$hasil->foto;
			if(file_exists($file=FCPATH.'/Upload/foto/'.$berkas)){
				unlink($file);
			}

			$this->db->delete('admin',array('id_admin'=>$id_admin));
			redirect("dashboard/admin");
		}	
		
	}

	function detail($id_user){

		if($this->admin->logged_id()){
		$file=$this->db->get_where('file',array('id_file'=>$id_user));
		$this->load->model("admin");
		$query['profil'] = $this->admin->get_data_user($file);
		$this->load->view('pengajuan_one_user',$query);
		}else{
			redirect("login");
		}
	}

	public function updatedata(){
		$this->form_validation->set_rules('password', 'Password', 'required');
    	$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');

    	if($this->form_validation->run() == FALSE){
            //Views
    		$this->session->set_flashdata('message', 'Gagal, password pertama dan kedua yang anda input tidak cocok');
    		redirect('dashboard/pengaturan');
    	} else {
    		$token=$this->session->userdata('user_id');
    		if($this->input->post('submit')){
    			$this->admin->updatedata($token);
    			redirect('login');
    		}
    		$data['hasil'] = $this->session->userdata('user_id');
    		$this->session->set_flashdata('message', 'Berhasil, password berhasil dirubah');
    		redirect('dashboard/pengaturan', $data);
    	}
	}

	public function ForgotPassword()
   {
         $email = $this->input->post('email');      
         $findemail = $this->admin->ForgotPassword($email);  
         if($findemail){
          $this->admin->sendpassword($findemail);        
           }else{
          $this->session->set_flashdata('msg','<center><h3>Email tidak terdaftar di sistem!</h3></center>');
          redirect('login','refresh');
      }
   }

}
