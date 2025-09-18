#include "TokoElektronik.cpp"

using namespace std;


int main(){

    string pilih;

   do { 
        cout << "\nPilih Menu\n";
        cout << "1. Tambah Produk\n";
        cout << "2. Tampilkan Produk\n";
        cout << "3. Update Produk\n";
        cout << "4. Hapus Produk\n";
        cout << "5. Cari Produk\n";
        cout << "Ketik 'exit' untuk keluar\n";
        cout << "Pilih:";
        cin >> pilih;
        
    
        
        // kondisi percabangan ketika pilih menu nomor berapa maka akan melakukan aktiion
        if (pilih == "1") {
            tambahProduk();
        } else if (pilih == "2") {
            tampilkanProduk();
        } else if (pilih == "3") {
            updateProduk();
        } else if (pilih == "4") {
            deleteProduk();
        } else if (pilih == "5") {
            searchProduk();
        } else if (pilih != "exit") {
            cout << "pilihan tidak tersedia\n";
        }
    } while (pilih != "exit"); // Loop akan berhenti jika pilih sama dengan "exit"
    
    cout << "Program selesai\n";
    return 0;
}