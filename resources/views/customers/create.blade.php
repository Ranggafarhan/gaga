<h1>Pendaftaran Pelanggan</h1>


<form action="{{ route('customer.store') }}" method="post">
    @csrf

    <label for=""> Kode Pelanggan</label>
    <input type="text" name="name" placeholder="Kode Pelanggan">
    <br>
    
    <label for=""> Nama Pelanggan</label>
    <input type="text" name="name" placeholder="Nama Pelanggan">
    <br>
    
    <label for=""> Telepon</label>
    <input type="text" name="name" placeholder="08xxxxx">
    <br>
    
    <label for=""> Alamat</label>
    <input type="text" name="name" placeholder="alamat" cols="30" rows="3"></textarea>
    <br>
    <input type="submit" value="Simpan">
</form>