public class TokoElektronik{
   //atribut dari kelas
     private int id;
     private String namaProduk;
     private String merk;
     private int harga;
     private int stok;


     public TokoElektronik(int id, String namaProduk, String merk, int harga, int stok){


        this.id = id;
        this.namaProduk = namaProduk;
        this.merk = merk;
        this.harga = harga;
        this.stok = stok;

     }

     //getter & setter

     public int getId(){
      return id;
     }
     public void setId(int id){
      this.id = id;
     }


     public String getNamaProduk(){
        return namaProduk;
     }

     public void setNamaProduk(String namaProduk){
        this.namaProduk = namaProduk;
     }

     
     public String getMerk(){
        return merk;
     }

     public void setMerk(String merk){
        this.merk = merk;
     }

     
     public int getHarga(){
        return harga;
     }

     public void setHarga(int harga){
        this.harga = harga;
     }

     public int getStok(){
        return stok;
     }

     public void setStok(int stok){
        this.stok = stok;
     }

    
     public void tampilkan(){
    System.out.printf("| %-3d | %-15s | %-12s | %-8d | %-4d |\n", id, namaProduk, merk, harga, stok);




     }


     

     







}