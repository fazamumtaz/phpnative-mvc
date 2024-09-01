<?php  

class Home extends Controller {
    public function index() {
        $data['judul'] = 'Utama';
        $this->view('inc/header', $data);
        $this->view('home/index');
        $this->view('inc/footer');
    }
}