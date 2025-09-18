<?php

// kelas untuk menyimpan data produk
class TokoElektronik{
    private int $id;
    private string $nama;
    private string $merk;
    private int $harga;
    private int $stok;
    private string $gambar;


    public function __construct(int $id, string $nama, string $merk, int $harga, int $stok, string $gambar){
        $this->id = $id;
        $this->nama = $nama;
        $this->merk = $merk;
        $this->harga = $harga;
        $this->stok = $stok;
        $this->gambar = $gambar;

    } 

    //getter dan setter unutuk akses
    public function getId(): int{
        return $this->id;
    }

    public function setID(int $id): void{
        $this->id = $id;
    }

    public function getNama(): string{
        return $this->nama;
    }

    public function setNama(string $nama): void{
        $this->nama = $nama;

    }

    public function getMerk(): string{
        return $this->merk;
    }

    public function setMerk(string $merk): void{
        $this->merk = $merk;
    }

    public function getHarga(): int{
        return $this->harga;
    }

    public function setHarga(int $harga): void{
        $this->harga = $harga;
    }

    public function getStok(): int{
        return $this->stok;
    }

    public function setStok(int $stok): void{
        $this->stok = $stok;
    }

     public function getGambar(): string{
        return $this->gambar;
    }

    public function setGambar(string $gambar): void{
        $this->gambar = $gambar;
    }


    


}