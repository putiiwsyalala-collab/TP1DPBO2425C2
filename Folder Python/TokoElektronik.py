class TokoElektronik:

    def __init__(self, id: int, namaProduk: str, merk: str, harga: int, stok: int):
        # atribut produk
        self.id = id
        self.namaProduk = namaProduk
        self.merk = merk
        self.harga = harga
        self.stok = stok

    # Getter & Setter

    def getId(self) -> int:
        return self.id

    def setId(self, id: int) -> int:
        self.id = id
        return self.id

    def getNamaProduk(self) -> str:
        return self.namaProduk

    def setNamaProduk(self, namaProduk: str) -> str:
        self.namaProduk = namaProduk
        return self.namaProduk

    def getMerk(self) -> str:
        return self.merk

    def setMerk(self, merk: str) -> str:
        self.merk = merk
        return self.merk

    def getHarga(self) -> int:
        return self.harga

    def setHarga(self, harga: int) -> int:
        self.harga = harga
        return self.harga

    def getStok(self) -> int:
        return self.stok

    def setStok(self, stok: int) -> int:
        self.stok = stok
        return self.stok

    # taampilkan informasi produk
    def tampilkanInfo(self) -> str:
      return f"| {str(self.id).ljust(3)} | {self.namaProduk.ljust(15)} | {self.merk.ljust(12)} | {str(self.harga).ljust(8)} | {str(self.stok).ljust(4)} |"




