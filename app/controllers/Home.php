<?php 

class Home extends Controller {
    public function index()
    {
        $data['judul'] = 'Beranda';
        $this->view('templates/header',$data);
        $this->view('templates/Navbar',$data);
        $this->view('home/index');
        $this->view('templates/footer');

    }
}