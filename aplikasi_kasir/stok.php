<!DOCTYPE html>
<html>
<body>

    <h2> KELOLA BARANG</h2>
    <input type="text" id="nama" placeholder="Nama Barang">
    <input type="number" id="stok" placeholder="Jumlah Stok">
    <button onclick="simpan()">Simpan</button>

    <br><br>
    <table border="1" cellpadding="5">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody id="tabel"></tbody>
    </table>

    <script>
        let data = []; 

        function simpan() {
            let n = document.getElementById('nama').value;
            let s = document.getElementById('stok').value;

            if (n && s) {
                data.push({ nama: n, stok: s });
                tampil();
                document.getElementById('nama').value = '';
                document.getElementById('stok').value = '';
            }
        }

        function tampil() {
            let html = '';
            for (let i = 0; i < data.length; i++) {
                html += `<tr>
                    <td>${data[i].nama}</td>
                    <td>${data[i].stok}</td>
                    <td>
                        <button onclick="ubah(${i})">Tambah Stok</button>
                        <button onclick="hapus(${i})">Hapus</button>
                    </td>
                </tr>`;
            }
            document.getElementById('tabel').innerHTML = html;
        }

        function ubah(i) {
            let tambah = prompt("Tambah berapa stok?");
            if (tambah) {
                data[i].stok = Number(data[i].stok) + Number(tambah);
                tampil();
            }
        }

        function hapus(i) {
            data.splice(i, 1); 
            tampil();
        }
    </script>

</body>
</html>