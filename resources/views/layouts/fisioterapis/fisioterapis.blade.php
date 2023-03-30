<!DOCTYPE html>
<html>
<head>
	<title>Monitoring Terapi Sepeda Cermin - Fisioterapis</title>
</head>
<body>
	@include('auth.navbar') {{-- Memanggil navbar untuk halaman login dan ganti password --}}
	@include('fisioterapis.data_pasien') {{-- Memanggil file blade data_pasien.blade.php --}}
	@include('fisioterapis.input_pasien') {{-- Memanggil file blade input_pasien.blade.php --}}
	@include('fisioterapis.riwayat_terapi_pasien') {{-- Memanggil file blade riwayat_terapi_pasien.blade.php --}}
</body>
</html>
