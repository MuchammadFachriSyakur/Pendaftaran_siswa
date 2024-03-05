<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru SMK Negeri 02 Pekalongan</title>
    <link rel="stylesheet" href="src/output.css" type="text/css" media="all" />
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>
<body>
   <header class="w-full px-2 py-4 bg-[#ff2100] text-center flex justify-center
  items-center">
    <h1 class="text-[20px] font-extrabold text-white">SMK Negeri 02 Pekalongan<h1>
   </header>
   <h3 class="text-[32px] font-extrabold text-center px-2 mt-3">Pendaftaran Siswa Baru</h3>
    <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav>
    <br>
    <div class="min-h-[100vh] flex flex-col items-start
  justify-start overflow-y-auto py-4">
      <table border="1" class="w-full">

        <thead class="w-full bg-slate-800 text-slate-300">

            <tr>
                <th class="p-2">No</th>
                <th class="p-2">Nama</th>
                <th class="p-2">Alamat</th>
                <th class="p-2">Jenis Kelamin</th>
                <th class="p-2">Agama</th>
                <th class="p-2">Sekolah Asal</th>
                <th class="p-2">Tindakan</th>
            </tr>
        </thead>
        <tbody>

        <?php
        $sql = "SELECT * FROM calon_siswa";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)) {
            echo "<tr class='px-2 border-b border-slate-200'>";

            echo "<td>".$siswa['id']."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['alamat']."</td>";
            echo "<td>".$siswa['jenis_kelamin']."</td>";
            echo "<td>".$siswa['agama']."</td>";
            echo "<td>".$siswa['sekolah_asal']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    </div>
    <footer class="footer w-full flex flex-col justify-center items-center px-4 py-12 bg-slate-800">
    <div class="w-full flex flex-col justify-center items-start">
      <img class="w-[50px] h-[50px] bg-red-300 rounded" src="Logo.jpg" alt="Logo" />
    </div>
    <p class="w-full text-slate-300 text-[16px] text-left mt-4">Pendaftaran
    calon peserta didik baru SMK Negeri 02 Pekalongan</p>
    <div class="w-full flex justify-center items-center mt-3 gap-2">
      <a href="https://github.com/MuchammadFachriSyakur" class="text-slate-300 text-[20px]"><i class="ph ph-github-logo"></i></a>
      <a href="https://github.com/MuchammadFachriSyakur" class="text-slate-300 text-[20px]"><i class="ph ph-github-logo"></i></a>
      <a href="https://github.com/MuchammadFachriSyakur" class="text-slate-300 text-[20px]"><i class="ph ph-github-logo"></i></a>
    </div>
    <div class="w-full h-[1px] border border-slate-200 mt-2"></div>
    <p class="w-full text-slate-300 text-[16px] text-center mt-6">Dibuat oleh <a
    href="https://muchammad-fachri-syakur.vercel.app/" class="text-cyan-300">Muchammad Fachri Syakur</a> dengan menggunakan <a
    href="https://tailwindcss.com/" class="text-cyan-300">Tailwindcss</a></p>
  </footer>
</body>
</html>