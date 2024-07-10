<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Daftar Siswa SMK Negeri 02 Pekalongan</title>
    <link rel="stylesheet" href="src/output.css" type="text/css" media="all" />

    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>
<body>
  <header class="w-full px-2 py-4 bg-[#ff2100] text-center flex justify-center
  items-center">
   <h1 class="text-[20px] font-extrabold text-white">SMK Negeri 02 Pekalongan<h1>
  </header>
    <div class="w-full min-h-[100vh] flex flex-col items-center justify-center">
      <h3 class="text-[32px] font-extrabold text-center px-2 mt-3 mb-3">Formulir
      Pendaftaran Siswa</h3>
      <form action="proses-pendaftaran.php" method="POST" class="w-full max-w-[450px]
      flex flex-col items-center justify-center p-3
      gap-4">
            <input type="hidden" name="id">
            <p class="w-full flex flex-col justify-center items-start gap-2">
                <label for="nama" class="text-[16px]">Nama: </label>
                <input type="text" name="nama" placeholder="nama lengkap" class="w-full px-4 py-2
                border border-slate bg-white hover:border-slate-600
                hover:bg-blue-200">
            </p>
            <p class="w-full flex flex-col justify-center items-start gap-2">
                <label for="alamat" class="text-[16px]">Alamat: </label>
                <textarea name="alamat" class="w-full px-4 py-2
                border border-slate bg-white hover:border-slate-600
                hover:bg-blue-200"></textarea>
            </p>
            <p class="w-full flex flex-col justify-center items-start gap-2">
                <label for="jenis_kelamin" class="text-[16px]">Jenis Kelamin: </label>
                <label class="w-full px-4 py-2
                border border-slate bg-white hover:border-slate-600
                hover:bg-blue-200">
                    <input type="radio" name="jenis_kelamin" value="laki-laki">Laki-laki</label>
                    <label class="w-full px-4 py-2
                border border-slate bg-white hover:border-slate-600
                hover:bg-blue-200">
                        <input type="radio" name="jenis_kelamin" value="perempuan">Perempuan</label>
            </p>
            <p class="w-full flex flex-col justify-center items-start gap-2">
                <label for="agama" class="text-[16px]">Agama: </label>
                <select name="agama" class="w-full p-3" required>
                    <option value="">Silahkan pilih agamamu</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Atheis">Atheis</option>
                </select>
            </p>
            <p class="w-full flex flex-col justify-center items-start gap-2">
                <label for="sekolah_asal" class="w-full flex flex-col
                justify-center items-start gap-2">Sekolah Asal: </label>
                <input type="text" name="sekolah_asal" placeholder="nama sekolah"
                class="w-full px-4 py-2
                border border-slate bg-white hover:border-slate-600
                hover:bg-blue-200">
            </p>
            <p>
                <input type="submit" value="daftar" name="daftar" class="px-3 py-2 bg-black text-white rounded cursor-pointer
            hover:bg-[rgb(0,0,0,0.6)] transition-all ease-out duration-300">
            </p>
    </form>
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
