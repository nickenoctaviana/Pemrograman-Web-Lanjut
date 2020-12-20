<html>
<body>
    <header>
        <h1>Selamat Datang</h1>
        <nav>
            <a href="/blog">HOME</a>
            |
            <a href="/blog/about">ABOUT</a>
            |
            <a href="/blog/article">ARTICLE</a>
        </nav>
    <header>
    <hr/>
    @section('judul')
    <h2><b>Halaman Praktikum Nicken</b></h2>
    @show
    @yield('konten')
    <br>
    @yield('isi')
    <br>
    @yield('akhir')
    <br><br>
    <hr/>
    <footer>
        <p>&copy; nicken octaviana.2020</p>
    </footer>
</body>
</html>