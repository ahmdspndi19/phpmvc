<?php 

class About extends Controller{
    public function index($nama = 'Ahmad', $pekerjaan = 'Web Devlopment', $umur = 20)
    {
        $this->view('about/index');
        
    }
    public function page()
    {
        $this->view('about/page');
    }
}