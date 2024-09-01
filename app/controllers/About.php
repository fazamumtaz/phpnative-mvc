<?php 

class About extends Controller {
    public function index($nama = 'Faza', $jurusan = 'TRPL', $kampus = 'SV IPB'){
        $data = [
            'nama'=>$nama,
            'jurusan'=>$jurusan,
            'kampus'=>$kampus
        ];
        $data['judul'] = 'About';
        $this->view('inc/header', $data);
        $this->view('about/index', $data);
        $this->view('inc/footer');
    }
    public function page(){
        $data['judul'] = 'Page';
        $this->view('inc/header', $data);
        $this->view('about/page');
        $this->view('inc/footer');

    }
}