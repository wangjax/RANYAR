<?php

class Dashboard extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        if($this->session->userdata('role_id') != '2'){
            $this->session->set_flashdata('pesan','
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda belum login!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('auth/login');
        }
    }

    public function tambah_ke_keranjang($id)
    {
        $barang = $this->model_barang->find($id);

        $data = array(
            'id'      => $barang->id_brg,
            'qty'     => 1,
            'price'   => $barang->harga,
            'name'    => $barang->nama_brg
    );

    $this->cart->insert($data);
    redirect('welcome');
    }
    
    public function detail_keranjang()
    {    
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('keranjang');
        $this->load->view('templates/footer_2');
    }

    public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('welcome');
    }
    
    public function hapus_item_keranjang($rowid)
    {
        $data = [
            'rowid' => $rowid,
            'qty' => 0
        ];

        $this->cart->update($data);
        redirect('welcome/detail_keranjang');
    }

    public function pembayaran()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pembayaran');
        $this->load->view('templates/footer_2');
    }

    public function proses_pesanan()
    {
        $this->form_validation->set_rules('nama','Nama','required',[
            'required' => 'Nama wajib diisi!']);
        $this->form_validation->set_rules('alamat','Alamat','required',[
            'required' => 'Alamat wajib diisi!']);
        $this->form_validation->set_rules('no_wa','No_wa','required',[
            'required' => 'No. WA wajib diisi!']);



        if($this->form_validation->run() == FALSE){
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pembayaran');
        $this->load->view('templates/footer_2');
        }else{
            $is_processed = $this->model_invoice->index();
            if($is_processed){
                $this->cart->destroy();
                $this->load->view('templates/header');
                $this->load->view('templates/sidebar');
                $this->load->view('proses_pesanan');
                $this->load->view('templates/footer_2');
            } else{
                echo "Maaf Pesanan Anda gagal diproses.";
            }
        }
        
    }


    public function detail($id_brg)
    {
        $data['barang'] = $this->model_barang->detail_brg($id_brg);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detail_barang',$data);
        $this->load->view('templates/footer_2');
    }
}