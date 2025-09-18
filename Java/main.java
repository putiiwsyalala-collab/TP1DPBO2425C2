import java.util.ArrayList;
import java.util.Scanner;

public class main {
    //list untuk menyimpan objek produk toko elektronik
    static ArrayList<TokoElektronik> daftarProduk = new ArrayList<>();
    //scanner untuk membaca input dari user
    static Scanner input = new Scanner(System.in);

    public static void main(String[] args){
        String pilih; //untuk menyimpan pilihan user

        do {
            //tampilan menu program utama
            System.out.println("\nPilih Menu\n");
            System.out.println("1. Tambah Produk");
            System.out.println("2. Tampilkan Produk");
            System.out.println("3. Update Produk");
            System.out.println("4. Hapus Produk");
            System.out.println("5. Cari Produk");
            System.out.println("ketik 'exit' untuk keluar");
            System.out.print("pilih: ");

            pilih = input.next();

            // percabangan sesuai pilihan user
            if (pilih.equals("1")) {
                insert();            //tambah produk baru
            } else if (pilih.equals("2")) {
                tampilkanProduk();   //tampilkan semua produk
            } else if (pilih.equals("3")) {
                update();            //update data produk berdasarkan ID
            } else if (pilih.equals("4")) {
                delete();            // hapus produk berdasarkan ID
            } else if (pilih.equals("5")) {
                search();            // cari produk berdasarkan ID
            }

        } while (!pilih.equalsIgnoreCase("exit"));  // Loop hingga user ketik 'exit'
    }

    // Fungsi untuk menambah data produk baru
    public static void insert(){
        System.out.print("Masukkan data (id, nama, merk, harga, stok):\n");
        int id = input.nextInt();        
        String nama = input.next();      
        String merk = input.next();      
        int harga = input.nextInt();     
        int stok = input.nextInt();      

        // buat objek baru dan menambahkannya ke daftar produk
        daftarProduk.add(new TokoElektronik(id, nama, merk, harga, stok));
        System.out.println("produk berhasil ditambah!");  
    }

    // fungsi menampilkan semua produk yang ada di daftar
    public static void tampilkanProduk(){
        if(daftarProduk.isEmpty()){
            System.out.println("Belum ada produk");  // Jika list kosong, tampilkan pesan
            return;
        }

        // header tabel
        System.out.println("+-----+-----------------+--------------+----------+------+");
        System.out.println("| ID  | Nama            | Merek        | Harga    | Stok |");
        System.out.println("+-----+-----------------+--------------+----------+------+");

        //lop untuk menampilkan setiap produk
        for(int i = 0; i < daftarProduk.size(); i++){
            TokoElektronik p = daftarProduk.get(i);
            p.tampilkan();
        }

        System.out.println("+-----+-----------------+--------------+----------+------+");
    }

    // fungsi mengupdate produk berdasarkan id
    public static void update(){
        System.out.print("Masukan id yang ingin diupdate: ");
        int id = input.nextInt();  // bca id produk yang ingin diupdate

        // cari produk dengan id tersebut
        for(int i = 0; i < daftarProduk.size(); i++){
            TokoElektronik p = daftarProduk.get(i);
            if(p.getId() == id){ 
                // jika ditemukan, input data baru
                System.out.print("Data baru (nama, merk, harga, stok): ");
                String nama = input.next();
                String merk = input.next();
                int harga = input.nextInt();
                int stok = input.nextInt();

                //update data produk
                p.setNamaProduk(nama);
                p.setMerk(merk);
                p.setHarga(harga);
                p.setStok(stok);

                System.out.println("Produk berhasil diupdate!");
                return;  
            }
        }

        // jika produk dengan id tersebut tidak ditemukan
        System.out.println("produk tidak ditemukan!");
    }

    // fungsi menghapus produk berdasarkan id
    public static void delete(){
        System.out.print("masukkan ID produk yang ingin dihapus: ");
        int id = input.nextInt();

        // Cari produk dengan id tersebut dan hapus
        for(int i = 0; i < daftarProduk.size(); i++){
            if(daftarProduk.get(i).getId() == id){
                daftarProduk.remove(i);
                System.out.println("produk berhasil dihapus!");
                return;  // Keluar dari method setelah penghapusan
            }
        }
        System.out.println("produk tidak ditemukan");
    }

    // fungsi untuk mencari produk berdasarkan id
    public static void search(){
        System.out.print("masukkan id produk yang ingin dicari: ");
        int id = input.nextInt();

        // loop untuk mencari produk dengan id yang dimaksud
        for(int i = 0; i < daftarProduk.size(); i++){
            TokoElektronik p = daftarProduk.get(i);
            if(p.getId() == id){
                //jika ditemukan, tampilkan detail produk
                System.out.println("+-----+-----------------+--------------+----------+------+");
                System.out.println("| ID  | Nama            | Merek        | Harga    | Stok |");
                System.out.println("+-----+-----------------+--------------+----------+------+");
                p.tampilkan();
                System.out.println("+-----+-----------------+--------------+----------+------+");
                return;
            }
        }

        // jika produk tidak ditemukan
        System.out.println("produk tidak ditemukan!");
    }
}
