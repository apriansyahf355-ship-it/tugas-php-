<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Penilaian Mahasantri</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      margin: 0;
      min-height: 100vh;
      background: linear-gradient(135deg, #667eea, #764ba2);
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .container {
      background: #fff;
      width: 100%;
      max-width: 520px;
      padding: 30px;
      border-radius: 18px;
      box-shadow: 0 25px 45px rgba(0,0,0,0.2);
    }

    h1 {
      text-align: center;
      margin: 0 0 8px;
      color: #4b3f72;
    }

    p {
      text-align: center;
      margin-bottom: 25px;
      font-size: 14px;
      color: #666;
    }

    label {
      display: block;
      margin-bottom: 6px;
      font-weight: 500;
      color: #333;
    }

    input, select {
      width: 100%;
      padding: 10px 12px;
      margin-bottom: 16px;
      border-radius: 8px;
      border: 1px solid #ccc;
    }

    input:focus, select:focus {
      outline: none;
      border-color: #764ba2;
      box-shadow: 0 0 0 2px rgba(118,75,162,0.15);
    }

    .nilai {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 14px;
    }

    button {
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 10px;
      background: linear-gradient(135deg, #667eea, #764ba2);
      color: white;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: 0.2s;
    }

    button:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.2);
    }

    .hasil {
      margin-top: 20px;
      padding: 15px;
      border-radius: 10px;
      background: #f5f5f5;
      display: none;
      font-size: 14px;
    }

    .predikat-baik { color: green; font-weight: 600; }
    .predikat-cukup { color: orange; font-weight: 600; }
    .predikat-kurang { color: red; font-weight: 600; }
  </style>
</head>
<body>

  <form class="container" method="POST" onsubmit="prosesNilai(event)">
    <h1>Penilaian Mahasantri</h1>
    <p>Form penilaian mahasantri berbasis POST</p>

    <label>Nama Mahasantri</label>
    <input type="text" id="nama" required>

    <label>Program</label>
    <select id="program" required>
      <option value="">-- Pilih Program --</option>
      <option>PPL</option>
      <option>DM</option>
      <option>IT</option>
    </select>

    <div class="nilai">
      <div>
        <label>Akhlak</label>
        <input type="number" id="akhlak" min="0" max="100" required>
      </div>
      <div>
        <label>Disiplin</label>
        <input type="number" id="disiplin" min="0" max="100" required>
      </div>
      <div>
        <label>Akademik</label>
        <input type="number" id="akademik" min="0" max="100" required>
      </div>
      <div>
        <label>Keaktifan</label>
        <input type="number" id="keaktifan" min="0" max="100" required>
      </div>
    </div>

    <button type="submit">Lihat Hasil</button>

    <div id="hasil" class="hasil"></div>
  </form>

  <script>
    function prosesNilai(e) {
      e.preventDefault();

      const nama = namaInput = document.getElementById('nama').value;
      const program = document.getElementById('program').value;
      const akhlak = +document.getElementById('akhlak').value;
      const disiplin = +document.getElementById('disiplin').value;
      const akademik = +document.getElementById('akademik').value;
      const keaktifan = +document.getElementById('keaktifan').value;

      const rata = (akhlak + disiplin + akademik + keaktifan) / 4;
      let predikat = '';
      let kelas = '';

      if (rata >= 85) {
        predikat = 'Sangat Baik'; kelas = 'predikat-baik';
      } else if (rata >= 70) {
        predikat = 'Baik'; kelas = 'predikat-baik';
      } else if (rata >= 55) {
        predikat = 'Cukup'; kelas = 'predikat-cukup';
      } else {
        predikat = 'Perlu Pembinaan'; kelas = 'predikat-kurang';
      }

      const hasil = document.getElementById('hasil');
      hasil.style.display = 'block';
      hasil.innerHTML = `
        <strong>Hasil Penilaian</strong><br><br>
        Nama: ${nama}<br>
        Program: ${program}<br>
        Rata-rata Nilai: ${rata.toFixed(2)}<br>
        Predikat: <span class="${kelas}">${predikat}</span>
      `;
    }
  </script>

</body>
</html>