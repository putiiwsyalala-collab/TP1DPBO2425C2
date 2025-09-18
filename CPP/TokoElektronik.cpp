#include <iostream>
#include <string>
#include <limits>
#include <iomanip> 

using namespace std;


class TokoElektronik{

    private:
    int id;
    string namaProduk;
    string merkProduk;
    int hargaProduk;
    int stokProduk;

    public:

      //kontruktor untuk array
    TokoElektronik(){
        
    }

    TokoElektronik(int id, string namaProduk, string merkProduk, int hargaProduk, int stokProduk){
        this->id = id;
        this->namaProduk = namaProduk;
        this->merkProduk = merkProduk;
        this->hargaProduk = hargaProduk;
        this->stokProduk = stokProduk;
    }

  
    // getter untuk mengakses atribut

    int getId() {
        return id;
    }

    void setId(int id){
        this->id = id;
    }

    string getNamaProduk(){
        return namaProduk;

    }

    void setNamaProduk(string namaProduk){
        this-> namaProduk = namaProduk;
    }

     string getMerkProduk(){
        return merkProduk;

    }

    void setMerkProduk(string merkProduk){
        this-> merkProduk = merkProduk;
    }

     int getHargaProduk(){
        return hargaProduk;

    }

    void setHargaProduk(int hargaProduk){
        this-> hargaProduk = hargaProduk;
    }

     int getStokProduk(){
        return stokProduk;

    }

    void setStokProduk(int stokProduk){
        this-> stokProduk = stokProduk;
    }

       void tampilkan() {
    cout << "| "
         << setw(3)  << left << id << " | "
         << setw(18) << left << namaProduk << " | "
         << setw(18) << left << merkProduk << " | "
         << setw(10) << right << hargaProduk << " | "
         << setw(4)  << right << stokProduk << " |\n";
}


    ~TokoElektronik(){     

    }


};

    TokoElektronik produk[100];
    int jumlah = 0;

    
// Fungsi tambah produk
void tambahProduk() {
    int id, harga, stok;
    ;string nama, merk;

    cout << "Masukkan Data(id,nama, merk, harga, stok):\n ";
    cin >> ws;
    cin >> id >> nama >> merk >> harga >> stok;

    produk[jumlah++] = TokoElektronik(id, nama, merk, harga, stok);
    cout << "Data berhasil ditambah!\n";
}

// Fungsi tampilkan semua produk
void tampilkanProduk() {
    cout << "\nDaftar Produk:\n";
    if (jumlah == 0) {
        cout << "Belum ada produk\n";
        return;
    }

    //tabel header
    cout << "+-----+--------------------+--------------------+------------+------+\n";
    cout << "| ID  | Nama               | Merek              | Harga      | Stok |\n";
    cout << "+-----+--------------------+--------------------+------------+------+\n";

    // Tampilkan semua data produk
    for (int i = 0; i < jumlah; i++) {
        produk[i].tampilkan();
    }

    //footer tabel
    cout << "+-----+--------------------+--------------------+------------+------+\n";
}

// Fungsi update produk
void updateProduk() {
    int id;
    cout << "Masukkan ID produk yang ingin diupdate: ";
    cin >> id;
    cin.ignore(numeric_limits<streamsize>::max(), '\n');

    for (int i = 0; i < jumlah; i++) {
        if (produk[i].getId() == id) {
            string nama, merk;
            int harga, stok;

            cout << "Masukkan data baru( nama, merk, harga, stok): ";
            cin >> ws;
            cin >> nama >> merk >> harga >> stok;


            produk[i].setNamaProduk(nama);
            produk[i].setMerkProduk(merk);
            produk[i].setHargaProduk(harga);
            produk[i].setStokProduk(stok);

            cout << "Produk berhasil diupdate!\n";
            return;
        }
    }

    cout << "Produk dengan ID tersebut tidak ditemukan.\n";
}

// Fungsi hapus produk
void deleteProduk() {
    int id;
    cout << "Masukkan ID produk yang ingin dihapus: ";
    cin >> id;

    for (int i = 0; i < jumlah; i++) {
        if (produk[i].getId() == id) {
            // Geser elemen ke kiri
            for (int j = i; j < jumlah - 1; j++) {
                produk[j] = produk[j + 1];
            }
            jumlah--;
            cout << "Produk berhasil dihapus!\n";
            return;
        }
    }

    cout << "Produk dengan ID tersebut tidak ditemukan.\n";
}

// Fungsi cari produk
void searchProduk() {
    int id;
    cout << "Masukkan ID yang ingin dicari: ";
    cin >> id;

    
    //tabel header
    cout << "+-----+--------------------+--------------------+------------+------+\n";
    cout << "| ID  | Nama               | Merek              | Harga      | Stok |\n";
    cout << "+-----+--------------------+--------------------+------------+------+\n";

    for (int i = 0; i < jumlah; i++) {
        if (produk[i].getId() == id) {
            produk[i].tampilkan();
            return;
        
        }
      
    }


    cout << "Produk dengan ID tersebut tidak ditemukan.\n";
     
   
}
   