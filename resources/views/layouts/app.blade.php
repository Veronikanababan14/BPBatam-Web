<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Home</title>

    <style>
        /* 1. Font judul lebih kecil di mobile */
        @media (max-width: 768px) {
            h1, h2, h3 {
                font-size: 0.9rem; /* sesuaikan kecilnya */
            }
        }

        /* 2. Swipe layanan perizinan unggulan tidak terpotong */
        .layanan-container {
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            -webkit-overflow-scrolling: touch;
            padding-bottom: 10px; /* beri ruang bawah biar tidak terpotong */
        }
        .layanan-item {
            scroll-snap-align: start;
            flex: 0 0 auto;
        }

        /* 3. Ukuran icon media sosial di footer */
        footer img[alt="Facebook"],
        footer img[alt="Twitter"],
        footer img[alt="Instagram"],
        footer img[alt="YouTube"] {
            width: 20px;
            height: 20px;
        }
        @media (max-width: 768px) {
            footer img[alt="Facebook"],
            footer img[alt="Twitter"],
            footer img[alt="Instagram"],
            footer img[alt="YouTube"] {
                width: 16px;
                height: 16px;
            }
        }
    </style>
</head>
<body>
    @include('partials.navbar')
    
    <main>  
        @yield('content')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        @include('components.footer')
    </main>
</body>
</html>
