<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_tamu extends CI_Model
{
    private $_table = "tamu";

    public $id_tamu;
    public $id_user;
    public $nama_tamu;
    public $alamat_tamu;
    public $ucapan;
    public $keterangan;

    public function rules()
    {
        return [
            ['field' => 'id_tamu',
            'label' => 'id_tamu',
            'rules' => 'required'],

            ['field' => 'id_user',
            'label' => 'id_user',
            'rules' => 'required'], 
            
            ['field' => 'alamat_tamu',
            'label' => 'alamat_tamu',
            'rules' => 'required'], 

            ['field' => 'nama_tamu',
            'label' => 'nama_tamu',
            'rules' => 'required'], 
            
            ['field' => 'ucapan',
            'label' => 'ucapan',
            'rules' => 'required'], 
            
            ['field' => 'keterangan',
            'label' => 'keterangan',
            'rules' => 'required'],
        ];
    }
     public function save()
    {
        $post = $this->input->post();
        $this->id_tamu = $post["id_tamu"];
        $this->id_user = "1";
        $this->nama_tamu = $post["nama_tamu"];
        $this->alamat_tamu = $post["alamat_tamu"];
        $this->ucapan = $post["ucapan"];
        $this->keterangan = $post["keterangan"];
        $this->db->insert($this->_table, $this);
    }

    public function get()
    {

        return $this->db->get($this->_table); 
    }   
    
    public function simpan($data)
    {

        return $this->db->insert($this->_table, $data); 
    }
    
 
    
 //      public function getByIdshow($id)
 //    {
 //        return $this->db->get_where($this->_table, ["id_show" => $id]);
 //    }
 //       public function getnamashow($id)
 //    {
 //        return $this->db->get_where("roadshow", ["id_show" => $id])->row();
 //    }
   
 //    public function update()
 //    {
 //     $post = $this->input->post();
 //        $this->id_show = $post["id_show"];
	// 	$this->jenis = $post["jenis_tiket"];
	// 	$this->tanggal_mulai = $post["tanggal_mulai"];
	// 	$this->tanggal_selesai = $post["tanggal_selesai"];
 //        $this->harga = $post["harga"];
 //        $this->jumlah_tiket = $post["jumlah_tiket"];
 //        $this->db->update($this->_table, $this, array('id_jenis' => $post['id_jenis']));
 //    }

 //    public function delete($id)
 //    {
	// 	$this->_deleteImage($id);
 //        return $this->db->delete($this->_table, array("id_jenis" => $id));
	// }
	
	// private function _uploadImage()
	// {

	// 	$config['upload_path']          = './upload/show/';
	// 	$config['allowed_types']        = 'gif|jpg|png';
	// 	$config['file_name']            = $this->nama;
	// 	$config['overwrite']			= true;
	// 	$config['max_size']             = 1024; // 1MB
	// 	// $config['max_width']            = 1024;
	// 	// $config['max_height']           = 768;

	// 	$this->load->library('upload', $config);

	// 	if ($this->upload->do_upload('_uploadimage')) {
	// 		return $this->upload->data("file_name");
	// 	}
		
	// 	return "default.jpg";
	// }

	// private function _deleteImage($id)
	// {
	// 	$product = $this->getById($id);
	// 	if ($product->image != "default.jpg") {
	// 		$filename = explode(".", $product->image)[0];
	// 		return array_map('unlink', glob(FCPATH."upload/product/$filename.*"));
	// 	}
	// }

}
    