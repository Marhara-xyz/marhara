<?php

class Undangan extends CI_Controller {
	function __construct(){
		parent::__construct();
     
        $this->load->model("M_tamu");
        $this->load->library('form_validation');
        $this->load->helper(array('form'));
	}
    public function index()
    {
        $this->load->view('undangan/undangan');
    }
    public function kirim()
    {
        if (isset($_POST['nama_tamu'])){
            $this->db->trans_begin();
            $post['nama_tamu'] = htmlentities(strip_tags($this->input->post('nama_tamu')));
            $post['alamat'] = htmlentities(strip_tags($this->input->post('alamat')));
            $post['keterangan'] = htmlentities(strip_tags($this->input->post('keterangan')));
            $post['ucapan'] = htmlentities(strip_tags($this->input->post('ucapan')));
            $simpan = $this->M_tamu->simpan($post);
            if ($simpan){
                $this->db->trans_commit();
                $stt=1;$pesan = "Berhasil dikirim";
            }else{
                $this->db->trans_rollback();
                $stt=0;$pesan = "Gagal";
            }
            echo json_encode(array('stt'=>$stt, 'pesan'=>$pesan));
            exit;
        }
    }
    public function ucapan()
    {
        $data['query'] = $this->M_tamu->get();
        $this->load->view("undangan/ucapan" ,$data);
    }
    // public function getRsvp($limit,$start)
    // {
    // 	$query = $this->db->get($this->_table, $limit, $start);
    //     echo json_encode($query);
    // }
    

    //     public function rsvp()
    // {
    //     $validation = $this->form_validation;//valiasi awal 
    //     $validation->set_rules($this->M_tamu->rules());//memanggil model M_regis dengan fungsi rules
    //     if ($validation->run()) {
    //         $this->M_tamu->save();//memanggil fungsi untuk insert database show di M_model
    //         $this->session->set_flashdata('success', 'Berhasil disimpan');
    //     }echo"<script>alert('Sumbit data berhasil dilakukan, silahkan menunggu admin kami sedang melakukan validasi kami akan mengirimkan e-tiket melalui alamat email anda jika data yang anda masukkan adalah valid ;)');</script>";
    //     {
    //     echo "<script>window.location='".base_url('order/')."';</script>";   
    //     }
    //     //jika semua script diatas yang ada di fungsi ini maka diarahkan ke controller show dengan funhgsi show_;ist
    // }
    public function add()
    {
        $this->form_validation->set_rules('nama','nama','required');
        $this->form_validation->set_rules('username','username','required|min_length[16]|is_unique[maaf.no_identitas]');
        $this->form_validation->set_rules('password','password','required|min_length[3]');
        $this->form_validation->set_rules('passconf','Konfirmasi Password','required|matches[password]',array('matches' => '%s Konfirmasi password tidak singkron'));
        $this->form_validation->set_rules('status','status','required');

        $this->form_validation->set_message('required','{field} masih kosong, silahkan isi');
        $this->form_validation->set_message('min_length','{field} minimal 3 karakter');
        $this->form_validation->set_message('is_unique','{field} ini sudah terpakai, silahkan coba yang lain');

        if($this->form_validation->run() == FALSE){
            $this->template->load('template','agen/tambah_agen');
        }else{
            $post= $this->input->post(null, TRUE);
            $this->M_login->add($post);
            if($this->db->affected_rows() > 0)
            {
                echo"<script>alert('Data tersimpan');</script>";
            }
                echo "<script>window.location='".base_url('agen')."';</script>";
        }

        
    }
    
  
}

