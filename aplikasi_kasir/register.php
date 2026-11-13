<!DOCTYPE html>
<html>
<body>

    <div id="formDaftar">
        <h2>Daftar</h2>
        <input type="text" id="nama" placeholder="Nama"><br><br>
        <button onclick="daftar()">Daftar Sekarang</button>
    </div>

    <div id="halamanHome" style="display:none;">
        <h1 id="pesan"></h1>
        <p>selamat anda sudah login diaplikasi kasir.</p>
         <br>
    <a href="index.php">selesai</a>
    </div> 
    
    <script> 
    
    
        function daftar() {
            var nama = document.getElementById('nama').value;
        
            if (nama !== "") {
                document.getElementById('formDaftar').style.display = 'none';
                document.getElementById('halamanHome').style.display = 'block';
                
                document.getElementById('pesan').innerText = "Selamat Datang, " + nama + "!";
            } else {
                alert("Masukkan nama terlebih dahulu!");
            }
        }
    </script>

    
   
</body>
</html>