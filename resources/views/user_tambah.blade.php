<body>
    <h1>Form Tambah Data User</h1>
    <a href="{{ route('/user') }}">Kembali</a>
    <form action="{{ route('/user/tambah_simpan') }}" method="post">
        {{ csrf_field() }}
        
        <label>Username</label>
        <input type="text" name="username" placeholder="Masukkan Username">
        <br>
        <label>Nama</label>
        <input type="text" name="nama" placeholder="Masukkan Nama">
        <br>
        <label>Password</label>
        <input type="password" name="password" placeholder="Masukkan Password">
        <br>
        <label>LEVEL ID</label>
        <input type="number" name="level_id" min="1" max="3">
        <br>
        <input type="submit" name="btn btn_success" value="Simpan">
    </form>
</body>
