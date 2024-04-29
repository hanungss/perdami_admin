<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Model
{
	//fungsi cek session
    function logged_id()
    {
        return $this->session->userdata('user_id');
    }

	//fungsi check login
    function check_login($table, $field1, $field2)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($field1);
        $this->db->where($field2);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result();
        }
    }

    function input_data($data,$table){
        $this->db->insert($table,$data);
    }

    public function insertuser($data)
    {
        $this->db->insert('user', $data);
    }

    function tambah_user($data){
        $sesi = $this->session->userdata("user_name");
        $this->db->insert('user',array('nama_user'=>$nama,'no_anggota'=>$no_anggota, 'no_hp'=>$no_hp, 'email'=>$email, 'cabang'=>$cabang, 'instansi'=>$instansi, 'username'=>$username, 'password'=>$password, 'foto'=>$foto));
        $username=$this->input->post('username');
        mkdir("/Upload/foto/".$sesi);
    }

    function get_data_user(){
        $sesi = $this->session->userdata("user_id");
        $query = $this->db->query("SELECT * FROM admin WHERE id_admin = '$sesi'");

        if($query->num_rows() > 0){
            foreach ($query->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    public function get_dokter($id_user)
    {
        $query=$this->db->query("SELECT * FROM user WHERE id_user='$id_user'");
        if($query->num_rows() > 0){
            foreach ($query->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    public function hitungJumlahSkore($id_status){
        $query=$this->db->query("SELECT SUM(skore) as jumlah FROM file WHERE id_file = '$id_status' AND kelompok='1'");
        if($query->num_rows() > 0){
            foreach ($query->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    public function get_nama_status($id_user)
    {
        $query=$this->db->query("SELECT DISTINCT kelompok FROM status WHERE id_status='$id_user'");
        if($query->num_rows() > 0){
            foreach ($query->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    function seri_sertifikat($id_user){
        $query=$this->db->query("SELECT * FROM status WHERE id_status='$id_user'");
        if($query->num_rows() > 0){
            foreach ($query->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    function get_tanggal_verifikasi($id_user){
        $query=$this->db->query("SELECT * FROM status WHERE id_status='$id_user' LIMIT 1");
        if($query->num_rows() > 0){
            foreach ($query->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    public function get_file($id_user)
    {
        $query=$this->db->query("SELECT * FROM file WHERE id_file='$id_user'");
        if($query->num_rows() > 0){
            foreach ($query->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    public function get_file_kel_1($id_user)
    {
        $query=$this->db->query("SELECT * FROM file WHERE id_file='$id_user' AND kelompok='1'");
        if($query->num_rows() > 0){
            foreach ($query->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    public function get_file_kel_2($id_user)
    {
        $query=$this->db->query("SELECT * FROM file WHERE id_file='$id_user' AND kelompok='2'");
        if($query->num_rows() > 0){
            foreach ($query->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    function get_data_all(){
        $query = $this->db->query("SELECT * FROM admin");

        if($query->num_rows() > 0){
            foreach ($query->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    function get_data_all_user(){
        $query = $this->db->query("SELECT * FROM user");

        if($query->num_rows() > 0){
            foreach ($query->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    function daftar($data)
    {
        $this->db->insert('admin',$data);
    }

    function get_data_status(){
        $sesi = $this->session->userdata("user_id");
        $query = $this->db->query("SELECT * FROM status WHERE id_status = '$sesi'");

        if($query->num_rows() > 0){
            foreach ($query->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    function get_member(){
        $aceh = $this->db->query('SELECT COUNT(*) FROM user WHERE cabang LIKE "aceh"');

        // if($query->num_rows() > 0){
        //     foreach ($query->result() as $data) {
        //         $hasil[] = $data;
        //     }
        //     return $hasil;
        // }
    }

    function get_data_notifikasi(){
        $query = $this->db->query("SELECT * FROM status WHERE status = 'menunggu' ORDER BY tanggal DESC LIMIT 2");

        if($query->num_rows() > 0){
            foreach ($query->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    function get_data_limit(){
        $sesi = $this->session->userdata("user_id");
        $query = $this->db->query("SELECT * FROM status WHERE id_status = '$sesi' LIMIT 2");

        if($query->num_rows() > 0){
            foreach ($query->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    function get_tanggal(){
        $sesi = $this->session->userdata("user_id");
        $query = $this->db->query("SELECT tanggal, status FROM status WHERE id_status = '$sesi' AND tanggal <= now() ORDER BY tanggal DESC LIMIT 1");

        if($query->num_rows() > 0){
            foreach ($query->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    public function get_data_file(){
        $sesi = $this->session->userdata("user_id");
        $query = $this->db->query("SELECT * FROM file WHERE id_file = '$sesi' AND jenis = '1'");

        if($query->num_rows() > 0){
            foreach ($query->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    public function get_berkas_file()
    {
        return $this->db->get('file')->result();
    }

    public function verifikasi()
    {
        $this->db->update('status',$data);
    }

    public function view_by_id_file($id_file)
    {    
        $this->db->where('id_file', $id_file);    
    $result = $this->db->get('file')->result(); // Tampilkan semua data kota berdasarkan id provinsi        
    return $result;   
}

public function get_verifikasi(){
    $query = $this->db->query("SELECT DISTINCT status.id_status, user.nama_user, user.str, user.cabang, user.instansi, status.kelompok, status.verifikator FROM status JOIN user ON status.nama_user = user.nama_user WHERE status.status = 'verified'");

    if($query->num_rows() > 0){
        foreach ($query->result() as $data) {
            $hasil[] = $data;
        }
        return $hasil;
    }
}

public function insert_checkbox($data){
    $this->db->insert('file',$data);
}

public function get_all_pengajuan()
{
    $query = $this->db->query("SELECT DISTINCT user.id_user, user.nama_user, user.instansi, user.cabang,status.tanggal,status.kelompok, status.id_row, status.status, status.verifikator FROM user JOIN status ON user.nama_user = status.nama_user JOIN file ON user.nama_user = file.nama_user WHERE status.status in ('menunggu','not-verified')");
    if($query->num_rows() > 0){
        foreach ($query->result() as $data) {
            $hasil[] = $data;
        }
        return $hasil;
    }
}

function pengajuan(){
    $query = $this->db->query("SELECT * FROM status WHERE status.status = 'menunggu'");
     if($query->num_rows() > 0){
        foreach ($query->result() as $data) {
            $hasil[] = $data;
        }
        return $hasil;
    }
}

public function semua_pengajuan($id_user)
{
    $query=$this->db->query("SELECT * FROM user,status WHERE id_user='$id_user'");
    if($query->num_rows() > 0){
        foreach ($query->result() as $data) {
            $hasil[] = $data;
        }
        return $hasil;
    }
}

    // public function verifikasi_data($id_user) {
    //     $user=$this->session->userdata('user_nama');
    //     $token=$this->session->userdata('user_id');
    //     $query = $this->db->query("UPDATE status set status='$status', keterangan='$keterangan' where id_status=$id_user");
    //      if($query->num_rows() > 0){
    //         foreach ($query->result() as $data) {
    //             $hasil[] = $data;
    //         }
    //         return $hasil;
    // }
    // }

public function get_data_pengajuan()
{
    $query = $this->db->query("SELECT DISTINCT user.id_user, user.nama_user, user.instansi, user.cabang,status.tanggal,status.kelompok, status.status, status.keterangan FROM user JOIN status ON user.nama_user = status.nama_user JOIN file ON user.nama_user = file.nama_user");
    if($query->num_rows() > 0){
        foreach ($query->result() as $data) {
            $hasil[] = $data;
        }
        return $hasil;
    }
}

public function get_data_ijazah(){
    $sesi = $this->session->userdata("user_id");
    $query = $this->db->query("SELECT * FROM file WHERE id_file = '$sesi' AND jenis = '2'");

    if($query->num_rows() > 0){
        foreach ($query->result() as $data) {
            $hasil[] = $data;
        }
        return $hasil;
    }
}

public function get_all_skore(){
    $sesi = $this->session->userdata("user_id");
    $query = $this->db->query("SELECT SUM(skore) FROM file WHERE id_file = 5 GROUP BY kelompok=1");
    if($query->num_rows() > 0){
        foreach ($query->result() as $data) {
            $hasil[] = $data;
        }
        return $hasil;
    }
}

public function get_data_kadep(){
    $sesi = $this->session->userdata("user_id");
    $query = $this->db->query("SELECT * FROM file WHERE id_file = '$sesi' AND jenis = '3'");

    if($query->num_rows() > 0){
        foreach ($query->result() as $data) {
            $hasil[] = $data;
        }
        return $hasil;
    }
}

public function get_data_ketua(){
    $sesi = $this->session->userdata("user_id");
    $query = $this->db->query("SELECT * FROM file WHERE id_file = '$sesi' AND jenis = '4'");

    if($query->num_rows() > 0){
        foreach ($query->result() as $data) {
            $hasil[] = $data;
        }
        return $hasil;
    }
}

public function get_data_kursus(){
    $sesi = $this->session->userdata("user_id");
    $query = $this->db->query("SELECT * FROM file WHERE id_file = '$sesi' AND jenis = '5'");

    if($query->num_rows() > 0){
        foreach ($query->result() as $data) {
            $hasil[] = $data;
        }
        return $hasil;
    }
}

public function get_data_karya_ilmiah(){
    $sesi = $this->session->userdata("user_id");
    $query = $this->db->query("SELECT * FROM file WHERE id_file = '$sesi' AND jenis = '6'");

    if($query->num_rows() > 0){
        foreach ($query->result() as $data) {
            $hasil[] = $data;
        }
        return $hasil;
    }
}

public function get_data_jumlah_operasi(){
    $sesi = $this->session->userdata("user_id");
    $query = $this->db->query("SELECT * FROM file WHERE id_file = '$sesi' AND jenis = '7'");

    if($query->num_rows() > 0){
        foreach ($query->result() as $data) {
            $hasil[] = $data;
        }
        return $hasil;
    }
}

public function insert($data)
{
    $this->db->insert('file', $data);
}

public function get_data_kualitas(){
    $sesi = $this->session->userdata("user_id");
    $query = $this->db->query("SELECT * FROM file WHERE id_file = '$sesi' AND jenis = '8'");

    if($query->num_rows() > 0){
        foreach ($query->result() as $data) {
            $hasil[] = $data;
        }
        return $hasil;
    }
}

public function pilih_semua(){
    $query = $this->db->query("SELECT * FROM status");

    if($query->num_rows() > 0){
        foreach ($query->result() as $data) {
            $hasil[] = $data;
        }
        return $hasil;
    }
}

public function update($data)
{
    $id_user = $this->session->userdata("user_id");
    $this->db->where('id_user',$id_user);
    $this->db->update('user', $data);
}

public function cek_old()
{
   $old = md5($this->input->post('password'));    
   $this->db->where('password',$old);
   $query = $this->db->get('user');
   return $query->result();;
}

public function updatedata(){
    $this->form_validation->set_rules('password', 'Password', 'required');
    $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');

    if($this->form_validation->run() == FALSE){
            //Views
        $data['main_content'] = 'pengaturan';
        $this->load->view('pengaturan', $data);
    } else {
        $token=$this->session->userdata('user_id');
        $password = md5($this->input->post('password'));
        $data = array (
            'password' => $password
        );
        $this->db->where('id_admin', $token);
        $this->db->update('admin', $data);
    }
}

public function ForgotPassword($email)
{
    $this->db->select('email');
    $this->db->from('admin'); 
    $this->db->where('email', $email); 
    $query=$this->db->get();
    return $query->row_array();
}

public function sendpassword($data)
{
    $email = $data['email'];
    $query1=$this->db->query("SELECT *  from admin where email = '".$email."' ");
    $row=$query1->result_array();
    if ($query1->num_rows()>0)

    {
        $passwordplain = "";
        $passwordplain  = rand(999999999,9999999999);
        $newpass['password'] = md5($passwordplain);
        $this->db->where('email', $email);
        $this->db->update('admin', $newpass); 
        $mail_message='Dear '.$row[0]['nama_admin'].','. "\r\n";
        $mail_message.='Terimakasih sudah menghubungi kami,<br><b>Password</b> baru anda adalah <b>'.$passwordplain.'</b>'."\r\n";
        $mail_message.='<br>Ubah password anda setelah masuk di menu pengaturan.';
        $mail_message.='<br>Thanks & Regards';
        $mail_message.='<br>Admin Resertifikasi Perdami';
        $mail_message.='<br>Mohon tidak membalas email ini';        
        date_default_timezone_set('Etc/UTC');
        require FCPATH.'assets/PHPMailer/PHPMailerAutoload.php';
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPSecure = "tls"; 
        $mail->Debugoutput = 'html';
        $mail->Host = "ssl://smtp.googlemail.com";
        $mail->Port = 465;
        $mail->SMTPAuth = true;   
        $mail->Username = "resertifikasiperdami@gmail.com";    
        $mail->Password = "gamatechno-perdami";
        $mail->setFrom('admin@perdami.id', 'Admin Resertifikasi Perdami');
        $mail->IsHTML(true);
        $mail->addAddress($email);
        $mail->Subject = 'Reset Password untuk Admin';
        $mail->Body    = $mail_message;
        $mail->AltBody = $mail_message;
        if (!$mail->send()) {
         $this->session->set_flashdata('msg','<center><h3>Failed to send password, please try again!</h3></center>');
     } else {
       $this->session->set_flashdata('msg','<center><div class="alert alert-danger" style="margin-top: 3px">
                    <div class="header"><b><i class="fa fa-exclamation-circle"></i></b> cek email anda untuk memperbarui password!</div></div></center>');
   }
   redirect(base_url().'login','refresh');        
}
else
{  
 $this->session->set_flashdata('msg','<center><div class="alert alert-danger" style="margin-top: 3px"><div class="header"><b><i class="fa fa-exclamation-circle"></i></b> Email tidak terdaftar di sistem!</div></div></center>');
 redirect(base_url().'login','refresh');
}
}

public function kirim_notifikasi($data){
    $email = $data['email'];
    $kelengkapan = $data['status_lengkap'];
    $status = $data['status'];
    $query1=$this->db->query("SELECT *  from user where email = '".$email."' ");
    $row=$query1->result_array();
    if ($query1->num_rows()>0)
    {
        $mail_message='Dear '.$row[0]['nama_user'].','. "\r\n";
        $mail_message.='Pengajuan anda telah diperiksa oleh admin dengan hasil resertifikasi <b>'.$status.'</b>. ';
        $mail_message.='Dengan catatan kelengkapan file <b>'.$kelengkapan.'</b>'."\r\n";
        $mail_message.='<br><small>*jika tidak terdapat keterangan pada catatan kelengkapan file menandakan berkas yang anda upload sudah sesuai</small>';
        $mail_message.='<br>Thanks & Regards';
        $mail_message.='<br>Admin Resertifikasi Perdami';
        $mail_message.='<br>resertifikasi.perdami.id';
        $mail_message.='<br>Mohon tidak membalas email ini';        
        date_default_timezone_set('Etc/UTC');
        require FCPATH.'assets/PHPMailer/PHPMailerAutoload.php';
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPSecure = "tls"; 
        $mail->Debugoutput = 'html';
        $mail->Host = "ssl://smtp.googlemail.com";
        $mail->Port = 465;
        $mail->SMTPAuth = true;   
        $mail->Username = "resertifikasiperdami2@gmail.com";    
        $mail->Password = "Resertifikasi_perdami2";
        $mail->setFrom('admin@perdami.id', 'Admin Resertifikasi Perdami');
        $mail->IsHTML(true);
        $mail->addAddress($email);
        $mail->Subject = 'Status pengajuan Anda di Resertifikasi Perdami';
        $mail->Body    = $mail_message;
        $mail->AltBody = $mail_message;
        if (!$mail->send()) {
           $this->session->set_flashdata('msg','<center><h3>Failed to send email, please try again!</h3></center>');
       } else {
         $this->session->set_flashdata('msg','<center><h3>Terimakasih anda sudah berhasil terdaftar. Silahkan cek email anda!</h3></center>');
     }
 }
}

}