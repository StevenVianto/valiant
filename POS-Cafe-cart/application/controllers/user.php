<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    private $api_url = "https://localhost:7076/api/NewsEvents";

    var $folder = "user/";

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('Gallery_model');
        $this->load->model('Menu_model');
    }


    public function index()
    {
        $data = ['content' => $this->folder . 'home'];
        $this->load->view('user/template', $data);
    }

    public function menu()
    {
        $data = array(
            'content' => $this->folder . 'menu',
            'tampilAll' => $this->Menu_model->get_data_tersedia(),
            'tampilFood' => $this->Menu_model->getByType('makanan')->result(),
            'tampilDrink' => $this->Menu_model->getByType('minuman')->result(),
        );
        $this->load->view('user/template', $data);
    }

    public function gallery()
    {
        $data = array(
            'content' => $this->folder . 'gallery',
            'tampil' => $this->Gallery_model->list_data('gallery')->result()
        );
        $this->load->view('user/template', $data);
    }

    public function contact()
    {
        $data = array('content' => $this->folder . 'contact');
        $this->load->view('user/template', $data);
    }

    // add cart

    public function cart()
    {
        // Load the session cart data
        $cart = $this->session->userdata('cart') ? $this->session->userdata('cart') : [];


        // For GET requests, load the cart view
        $data = [
            'content' => $this->folder . 'cart',
            'cart' => $cart,
        ];
        $this->load->view('user/template', $data);
    }


    // Add this after the existing cart() method

    // Tambahkan ini setelah method cart() yang ada

    public function add_to_cart()
    {
        $menu_id = $this->input->post('menu_id');
        $name = $this->input->post('name');
        $price = $this->input->post('price');

        // Ambil keranjang yang ada atau inisialisasi array kosong
        $cart = $this->session->userdata('cart') ? $this->session->userdata('cart') : [];

        // Periksa apakah item sudah ada di keranjang
        $item_key = array_search($menu_id, array_column($cart, 'menu_id'));

        if ($item_key !== false) {
            // Item sudah ada, tambah jumlahnya
            $cart[$item_key]['quantity']++;
        } else {
            // Tambah item baru
            $cart[] = [
                'menu_id' => $menu_id,
                'name' => $name,
                'price' => $price,
                'quantity' => 1
            ];
        }

        // Simpan keranjang yang diperbarui ke session
        $this->session->set_userdata('cart', $cart);

        redirect('/menu');
    }

    public function checkout()
    {
        // Kosongkan keranjang
        $this->session->unset_userdata('cart');

        // Set pesan flash
        $this->session->set_flashdata('message', 'Terima kasih atas pesanan Anda! Silakan lanjut ke kasir untuk pembayaran.');

        redirect('/cart');
    }


    public function news()
    {
        $data['news_events'] = callAPI('GET', $this->api_url);
        $data['content'] = $this->folder . 'news';
        $this->load->view('user/template', $data);
    }




}



/* End of file user.php */
/* Location: ./application/controllers/user.php */