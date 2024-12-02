<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran</title>
</head>
<body>
    <h1>Pendaftaran Pengguna</h1>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form action="{{ route('register') }}" method="POST">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br>

        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <br>

        <label for="password_confirmation">Konfirmasi Password:</label>
        <input type="password" name="password_confirmation" required>
        <br>

        <button type="submit">Daftar</button>
    </form>
</body>
</html>
