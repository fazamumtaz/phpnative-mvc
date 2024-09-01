<?php 

class About{
    public function index($nama = 'Faza', $jurusan = 'TRPL', $kampus = 'SV IPB'){
        echo "Halo, nama saya $nama, dan saya adalah mahasiswa jurusan $jurusan di $kampus";
    }
    public function page(){
        echo 'About/page';
    }
}