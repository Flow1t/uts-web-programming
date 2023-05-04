<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kafe Sejuta Umat</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">

        <!-- Icons -->
        <script src="https://unpkg.com/feather-icons"></script>

        <!-- Greetings -->


    </head>


    <body>
        <!-- Greetings -->
        @php
            $user = App\Models\User::find(1);
            $transactions = $user->transactions;
            date_default_timezone_set('Asia/Jakarta');
            $time = date('H');
            $name = $user->name; // Ganti dengan nama user yang ingin ditampilkan
            $loyalty = $user->loyalty;
            if ($time >= 0 && $time < 12) {
                $greeting = 'Good Morning';
            } else if ($time >= 12 && $time < 18) {
                $greeting = 'Good Afternoon';
            } else {
                $greeting = 'Good Evening';
            }

            $user_level = $loyalty; // Ganti dengan level user yang sebenarnya
            if ($user_level == "gold") {
                $loyalty_program = "Gold Level";
                $loyalty_program_color = "#C6A961";
            } else if ($user_level == "green") {
                $loyalty_program = "Green Level";
                $loyalty_program_color = "#006F42";
            } else {
                $loyalty_program = "";
                $loyalty_program_color = "";
            }
        @endphp
        {{-- Navbar start --}}
        <nav class="navbar">
            <a href="#" class="navbar-logo">Kopi <span>SejutaUmat</span><br>
                <h3>{{ $greeting }}, {{ $name }}!</h3>
            </a>
            <div class="navbar-nav">
                <a href="#home">Home</a>
                <a href="#about">Promosi</a>
                <a href="#products">Produk</a>
                <a href="#transaksi">Transaksi</a>
                <a href="#contact">Kontak</a>
                <a href="{{ route('user1') }}">User 1</a>
                <a href="{{ route('user2') }}">User 2</a>
            </div>

            <div class="navbar-extra">
                <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
            </div>

            {{-- Loyalty Program Start --}}
            <div class="loyalty-level">
                <h3 style="color:{{$loyalty_program_color}}">{{$loyalty_program}}</h3>
            </div>
            {{-- Loyalty Program End --}}

        </nav>
        {{-- Navbar end --}}

        {{-- Bintang Section Start --}}
        <section class="loyalty" id="loyalty">
            <div class="user-stars">
                <h2>{{ $user->stars }} <i data-feather="star" class="star-full"></i></h2>
                <h3>Star Balance</h3>
                <a href="#" class="redeem-button">Redeem</a>
            </div>
        </section>
        {{-- Bintang Section End --}}

        {{-- Hero Section start --}}
        <section class="hero" id="home">
            <main class="content">
                <h1>Selamat Datang di Kopi <span>SejutaUmat</span></h1>
                <a href="#products" class="cta">Beli Sekarang</a>
            </main>
        </section>
        {{-- Hero Section end --}}

        {{-- About Section Start --}}
        <section id="about" class="about">
            <h2><span>Promosi</span> Kami</h2>
            <div class="row">
                <div class="about-img">
                    <img src="img/promo1.jpg" alt="promo1">
                </div>
                <div class="content">
                    <h3>Beli 1 Gratis 1</h3>
                    <p>Setiap pembelian 1 Iced Latte, dapatkan gratis 1 Ice Latte untuk temanmu!</p>
                </div>
                <div class="about-img">
                    <img src="img/promo2.jpg" alt="promo2">
                </div>
                <div class="content">
                    <h3>Beli 2 Disc 25%</h3>
                    <p>Setiap pembelian dua Iced Americano dapatkan discount sebesar 25%!</p>
                </div>
                <div class="about-img">
                    <img src="img/promo3.jpg" alt="promo3">
                </div>
                <div class="content">
                    <h3>Disc 30% All Products</h3>
                    <p>Dapatkan harga spesial untuk semua produk minuman! Hanya berlaku hingga 13 Mei 2023!</p>
                </div>
            </div>

        </section>
        {{-- About Section End --}}

        {{-- Product Section Start --}}
        <section class="products" id="products">
            <h2><span>Menu</span> Kami</h2>

            <div class="row">
                <div class="product-card">
                    <div class="product-icons">
                        <a href="#"><i data-feather="shopping-cart"></i></a>
                        <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
                    </div>
                    <div class="product-image">
                        <img src="img/menu/1.jpg" alt="americano">
                    </div>
                    <div class="product-content">
                        <h3>Iced Americano</h3>
                        <div class="product-stars">
                            <i data-feather="star" class="star-full"></i>
                            <i data-feather="star" class="star-full"></i>
                            <i data-feather="star" class="star-full"></i>
                            <i data-feather="star" class="star-full"></i>
                            <i data-feather="star" class="star-full"></i>
                        </div>
                        <div class="product-price">IDR 35K</div>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-icons">
                        <a href="#"><i data-feather="shopping-cart"></i></a>
                        <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
                    </div>
                    <div class="product-image">
                        <img src="img/menu/2.jpg" alt="iced latte">
                    </div>
                    <div class="product-content">
                        <h3>Iced Latte</h3>
                        <div class="product-stars">
                            <i data-feather="star" class="star-full"></i>
                            <i data-feather="star" class="star-full"></i>
                            <i data-feather="star" class="star-full"></i>
                            <i data-feather="star" class="star-full"></i>
                            <i data-feather="star" class="star-full"></i>
                        </div>
                        <div class="product-price">IDR 42K</div>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-icons">
                        <a href="#"><i data-feather="shopping-cart"></i></a>
                        <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
                    </div>
                    <div class="product-image">
                        <img src="img/menu/3.jpg" alt="espresso">
                    </div>
                    <div class="product-content">
                        <h3>Espresso</h3>
                        <div class="product-stars">
                            <i data-feather="star" class="star-full"></i>
                            <i data-feather="star" class="star-full"></i>
                            <i data-feather="star" class="star-full"></i>
                            <i data-feather="star" class="star-full"></i>
                            <i data-feather="star" class="star-full"></i>
                        </div>
                        <div class="product-price">IDR 30K</div>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-icons">
                        <a href="#"><i data-feather="shopping-cart"></i></a>
                        <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
                    </div>
                    <div class="product-image">
                        <img src="img/menu/4.jpg" alt="latte">
                    </div>
                    <div class="product-content">
                        <h3>Latte</h3>
                        <div class="product-stars">
                            <i data-feather="star" class="star-full"></i>
                            <i data-feather="star" class="star-full"></i>
                            <i data-feather="star" class="star-full"></i>
                            <i data-feather="star" class="star-full"></i>
                            <i data-feather="star" class="star-full"></i>
                        </div>
                        <div class="product-price">IDR 40K</div>
                    </div>
                </div>
            </div>
        </section>
        {{-- Product Section End --}}

        {{-- Transaksi Section Start --}}
        <section class="transaksi" id="transaksi">
            <div class="transaksi-tabel">
                <h2><span>Transaksi</span></h2>
                <table>
                    <thead>
                      <tr>
                        <th>Nama Coffee</th>
                        <th>Jumlah</th>
                        <th>Tanggal Transaksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- Mulai loop untuk setiap transaksi -->
                      @foreach ($transactions as $transaction)
                        <tr>
                            <td>{{ $transaction->coffee }}</td>
                            <td>{{ $transaction->qty }}</td>
                            <td>{{ $transaction->purchase_date }}</td>
                        </tr>
                        @endforeach
                      <!-- Selesai loop untuk setiap transaksi -->
                    </tbody>
                  </table>
            </div>
        </section>
        {{-- Transaksi Section End --}}


        {{-- Contact Section Start --}}
        <section id="contact" class="contact">
            <h2><span>Kontak</span> Kami</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, repellendus!
            </p>

            <div class="row">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2236.570921147507!2d126.92087698797775!3d37.55532459893869!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357c98c338d48619%3A0xaa1a5992665e3e79!2sGodabang%20Hongdae!5e0!3m2!1sen!2sid!4v1683120310516!5m2!1sen!2sidallowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>

                <form action="">
                    <div class="input-group">
                        <i data-feather="user"></i>
                        <input type="text" placeholder="nama">
                    </div>
                    <div class="input-group">
                        <i data-feather="mail"></i>
                        <input type="text" placeholder="email">
                    </div>
                    <div class="input-group">
                        <i data-feather="phone"></i>
                        <input type="text" placeholder="no hp">
                    </div>
                    <button type="submit" class="btn">Kirim Pesan</button>
                </form>

            </div>
        </section>
        {{-- Contact Section End --}}

        {{-- Footer Start --}}
        <footer>
            <div class="socials">
                <a href="#"><i data-feather="instagram"></i></a>
                <a href="#"><i data-feather="twitter"></i></a>
                <a href="#"><i data-feather="facebook"></i></a>
            </div>

            <div class="links">
                <a href="#home">Home</a>
                <a href="#about">Promosi</a>
                <a href="#products">Produk</a>
                <a href="#transaksi">Transaksi</a>
                <a href="#contact">Kontak</a>
                <a href="{{ route('user1') }}">User 1</a>
                <a href="{{ route('user2') }}">User 2</a>
            </div>

            <div class="credit">
                <p>Created by <a href="">devinaugustin</a>. | &copy; 2023</p>
            </div>
        </footer>
        {{-- Footer End --}}

        {{-- Modal Box Item Detail Start --}}
        <div class="modal" id="item-detail-modal">
            <div class="modal-container">
                <a href="#" class="close-icon"><i data-feather="x"></i></a>
                <div class="modal-content">
                    <img src="img/menu/1.jpg" alt="iced americano">
                    <div class="product-content">
                        <h3>Iced Americano</h3>
                        <p>Iced americano adalah minuman kopi yang menyegarkan dan menyenangkan. Dibuat dengan menyeduh espresso panas ke dalam air dingin dan es batu, iced americano menawarkan rasa kopi yang kuat dan bersih tanpa susu atau gula. Nikmati sensasi dingin dan pahit dari iced americano di saat kapan saja.</p>
                        <div class="product-stars">
                            <i data-feather="star" class="star-full"></i>
                            <i data-feather="star" class="star-full"></i>
                            <i data-feather="star" class="star-full"></i>
                            <i data-feather="star" class="star-full"></i>
                            <i data-feather="star" class="star-full"></i>
                        </div>
                        <div class="product-price">IDR 35K</div>
                        <a href="#"><i data-feather="shopping-cart"></i> <span>add to cart</span></a>
                    </div>
                </div>
            </div>
        </div>
        {{-- Modal Box Item Detail End --}}

        {{-- Floating Button Start --}}
        <a href="#products" class="floating-btn">Coffee</a>
        {{-- Floating Button End --}}

        <!-- Icons -->
        <script>
            feather.replace()
          </script>

        {{-- My Javascript --}}
        <script src="js/script.js"></script>
    </body>
</html>
