<?php

class Mahasiswa_model
{
    private $mhs = [
        [
            "nama" => "Geraldi Nathan",
            "nim" => "202110370311351",
            "email" => "g@gmail.com",
            "jurusan" => "Informatika"
        ],
        [
            "nama" => "Tommy Limmm",
            "nim" => "202010370311543",
            "email" => "mmm@gmail.com",
            "jurusan" => "Teknik Pangan"
        ],
        [
            "nama" => "Dirgantara",
            "nim" => "202110370311123",
            "email" => "dg@gmail.com",
            "jurusan" => "Teknik Pesawat"
        ],
    ];

    public function getAllMahasiswa()
    {
        return $this->mhs;
    }
}
