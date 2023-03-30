<!DOCTYPE html>
<html>
<head>
	<title>Monitoring Terapi Sepeda Cermin - Pasien</title>
</head>
<body>
	@include('auth.navbar') {{-- Memanggil navbar untuk halaman login dan ganti password --}}
	@include('pasien.grafik_hasil_terapi') {{-- Memanggil file blade grafik_hasil_terapi.blade.php --}}
	@include('pasien.profil_pasien') {{-- Memanggil file blade profil_pasien.blade.php --}}
</body>
</html>
