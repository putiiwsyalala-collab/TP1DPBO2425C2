from TokoElektronik import TokoElektronik

# list untuk menyimpan semua produk
Produk: list[TokoElektronik] = []


# fungsi untuk menambah produk
def tambahProduk():
    data = input("Masukkan ID, Nama, Merk, Harga, Stok: \n")
    id_str, nama, merk, harga_str, stok_str = data.split()

    Produk.append(TokoElektronik(int(id_str), nama, merk, int(harga_str), int(stok_str))
    )
    print("Produk berhasil ditambahkan!")


# Fungsi untuk menampilkan semua produk
def tampilkanProduk():
    if len(Produk) == 0:
        print("Belum ada produk!")
        return

    print("+-----+-----------------+--------------+----------+------+" )
    print("| ID  | Nama            | Merk         | Harga    | Stok |")
    print("+-----+-----------------+--------------+----------+------+" )

    for p in Produk:
      print(p.tampilkanInfo())


    print("+-----+-----------------+--------------+----------+------+" )






# Fungsi Update Produk
def updateProduk():
    idCari = int(input("Masukkan ID produk yang ingin diupdate: "))
    ketemu = False
    for p in Produk:
        if p.getId() == idCari:
            ketemu = True
            data = input("Masukkan data baru (nama merk harga stok): ").split()
            p.setNamaProduk(data[0])
            p.setMerk(data[1])
            p.setHarga(int(data[2]))
            p.setStok(int(data[3]))
            print("Produk berhasil diupdate!\n")
    if not ketemu:
        print("Produk tidak ditemukan!\n")



# fungsi Hapus Produk
def hapusProduk():
    idCari = int(input("Masukkan ID produk yang ingin dihapus: "))
    i = 0
    while i < len(Produk):
        if Produk[i].getId() == idCari:
            Produk.pop(i)
            print("Produk berhasil dihapus!\n")
            return
        i += 1
    print("Produk tidak ditemukan!\n")

# Fungsi untuk mencari produk berdasarkan ID
def cariProduk():
    id = int(input("Masukkan ID produk yang ingin dicari: "))
    ditemukan = False

    for p in Produk:
        if p.getId() == id:
            print("+-----+-----------------+--------------+----------+------+" )
            print("| ID  | Nama            | Merk         | Harga    | Stok |")
            print("+-----+-----------------+--------------+----------+------+" )
            p.tampilkanInfo()
            print("+-----+-----------------+--------------+----------+------+" )
            ditemukan = True


    if not ditemukan:
        print("Produk dengan ID tersebut tidak ditemukan!")



# Program untuk menampilkakn menu yang akan dipilih user
def main():
    jalan = True
    while jalan:
        print("Pilih Menu\n")
        print("1. Tambah Produk")
        print("2. Tampilkan Semua Produk")
        print("3. Update Produk")
        print("4. Hapus Produk")
        print("5. Cari Produk")
        print("6. Keluar")

        pilihan = input("Pilih menu: ")

        if pilihan == "1":
            tambahProduk()
        elif pilihan == "2":
            tampilkanProduk()
        elif pilihan == "3":
            updateProduk()
        elif pilihan == "4":
            hapusProduk()
        elif pilihan == "5":
            cariProduk()
        elif pilihan == "6":
            print("Terima kasih, program selesai.")
            jalan = False  #keluar dari loop
        else:
            print("Pilihan tidak valid!\n")

#program utama
if __name__ == "__main__":
    main()
















