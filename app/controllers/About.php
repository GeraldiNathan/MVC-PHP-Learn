<?php

class About
{
    public function index($nama = 'Geraldi', $pekerjaan = 'Mahasiswa')
    {
        echo "Saya $nama, seorang $pekerjaan";
    }

    public function page()
    {
        echo 'About/page';
    }
}
