<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru SMK Negeri 2 Pekalongan</title>
    <link rel="stylesheet" href="src/output.css" type="text/css" media="all" />
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>
<body>
  <header class="w-full px-2 py-4 bg-[#ff2100] text-center flex justify-center
  items-center">
   <h1 class="text-[20px] font-extrabold text-white">SMK Negeri 02
   Pekalongan<h1>
  </header>
  <h3 class="text-[32px] font-extrabold text-center px-2 mt-3">Pendaftaran Siswa Baru</h3>
  <div class="w-full min-h-[100vh] flex flex-col items-center
  justify-center">
    <h4 class="text-[20px] font-normal mb-4">Menu</h4>
    <nav>
        <ul class=" w-full flex flex-row justify-center items-center gap-3">
            <li class="px-3 py-2 bg-black text-white rounded cursor-pointer
            hover:bg-[rgb(0,0,0,0.6)] transition-all ease-out duration-300"><a href="form-daftar.php">Daftar Baru</li>
            <li class="px-3 py-2 bg-black text-white rounded"><a href="list-siswa.php">Pendaftar</li>
        </ul>
    </nav>
    <?php if(isset($_GET['status'])): ?>
            <?php
            if($_GET['status'] == 'sukses') {
                echo "<p class='mt-3 px-3 py-2 bg-green-200 rounded text-[16px]
                text-black'>Pendaftaran siswa berhasil</p>";
            } else {
                echo "<p class='mt-3 px-3 py-2 bg-red-200 rounded text-[16px]
                text-black'>Pendaftaran siswa tidak berhasil</p>";
            }
            ?>
    <?php endif; ?>
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