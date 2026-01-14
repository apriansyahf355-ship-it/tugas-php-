.<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pendaftaran Mahasantri</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      margin: 0;
      min-height: 100vh;
      background: linear-gradient(135deg, #2193b0, #6dd5ed);
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .card {
      background: #ffffff;
      width: 100%;
      max-width: 500px;
      padding: 30px;
      border-radius: 18px;
      box-shadow: 0 20px 40px rgba(0,0,0,0.25);
    }

    h1 {
      text-align: center;
      margin-bottom: 10px;
      color: #2193b0;
    }

    p {
      text-align: center;
      font-size: 14px;
      color: #666;
      margin-bottom: 25px;
    }

    label {
      display: block;
      margin-bottom: 6px;
      font-weight: 500;
      color: #333;
    }

    input, select, textarea {
      width: 100%;
      padding: 10px 12px;
      margin-bottom: 16px;
      border-radius: 8px;
      border: 1px solid #ccc;
      font-size: 14px;
    }

    input:focus, select:focus, textarea:focus {
      outline: none;
      border-color: #2193b0;
      box-shadow: 0 0 0 2px rgba(33,147,176,0.15);
    }

    button {
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 10px;
      background: linear-gradient(135deg, #2193b0, #6dd5ed);
      color: #fff;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: 0.2s;
    }

    button:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.2);
    }

    .note {
      margin-top: 15px;
      text-align: center;
      font-size: 12px;
      color: #888;
    }
  </style>
</head>
<body>

  <form class="card" method="GET" action="">
    <h1>Pendaftaran Mahasantri</h1>
    <p>Form pendaftaran mahasantri menggunakan method GET</p>

    <label>Nama Lengkap</label>
    <input type="text" name="nama" placeholder="Nama lengkap" required>

    <label>NIM</label>
    <input type="text" name="nim" placeholder="Nomor Induk Mahasantri" required>

    <label>Jenis Kelamin</label>
    <select name="jk" required>
      <option value="">-- Pilih Jenis Kelamin --</option>
      <option value="Laki-laki">Laki-laki</option>
      <option value="Perempuan">Perempuan</option>
    </select>

    <label>Program Studi</label>
    <select name="prodi" required>
      <option value="">-- Pilih Program Studi --</option>
      <option value="Teknik Informatika">Teknik Informatika</option>
      <option value="Sistem Informasi">Sistem Informasi</option>
      <option value="Manajemen">Manajemen</option>
    </select>

    <label>Hobi</label>
    <input type="text" name="hobi" placeholder="Hobi">

    <label>Alamat</label>
    <textarea name="alamat" rows="3" placeholder="Alamat lengkap"></textarea>

    <button type="submit">Daftar</button>

    <div class="note">Data dikirim menggunakan method GET</div>
  </form>

</body>
</html>
