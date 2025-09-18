# TP1DPBO2425C2

# Saya Putri Ramadhani dengan NIM 2410975 menegerjakan Tugas Praktikum 1 dalam mata kuliah DPBO
# untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan.
# Aaamiin  


 # Penjelasan Desain dan Kode Flow:

 Program ini adalah program sederhana yang mengelola data di sebuah toko elektonik. Jadi hanya menggunakan 1 kelas yaitu   class  TokoElektronik
 
 Setiap produk akan memiliki 4 atribut yaitu:
 1. id, sebagai identifier unik untuk membedakan tiap produk
 2. Nama Produk, yaitu sebagai nama barang dari toko elektronik
 3. Merk, sebagai merek barang dari produk elektronik tersebut
 4. Harga, sebagai harga sebuah barang dari produk elektronik
 5. Stok, sebagai stok/sisa barang dari produk elektronik

 # Terdapat menu utama/pilihan menu dalam program yaitu:

# Penjelasan dalam Kodenya/Flow Kode:
 -Program ini akan menampilkan menu pilihan kepada pengguna
 -menu terdiri dari: 1. Tambah produk
                     2. Tampilkan produk
                     3. Update Produk
                     4. Hapus Produk
                     5. Cari Produk
                     Dan ketik exit jika ingin keluar dari program
 -Untuk memasukkan input berupa angka(1-5) atau exit, input akan disimpan dalam variael pilih yang berupa percabangan yaitu:

 1. Jika user input 1, maka program akan memanggil fumgsi tambahProduk(). yang mana itu akan menambahkan produk baru berupa(id, namaProduk, merk, harga, dan stok)

 2. Jika user input 2 maka akan menampilakan daftar produk yang tersimpan ke dalam tabel, jika belum da maka akan menampilkan pesan "belum ada produk"

 3. Jika user input 3 maka akan update data berdasarkan pencarian ID dan jika ingin menampilkan produk yang ingin dupdate maka akan menmapilkan dalam bentuk tabel

 4. Jika user input 4 maka akan menghapus data berdasarkan id produk yang ingin dihapus dengan menggeser elemen array ke kiri dan jumlah akan dikurangi satu

 5. Jika User input 5 maka akan mencari produk yang ingin dicari berdasarkan ID yang dipilih
  
 6. Jika user input exit maka perulangan akan erhneti dan akan keluar dari program

 
 Dan program ini juga menggunakan array untuk mengelola sekumpulan object dari kelas TokoElektronik

