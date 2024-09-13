<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Love Music Instruments</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #121212; /* Spotify black background */
            color: white;
        }

        .navbar {
            background-color: #1DB954; /* Spotify green */
            color: white;
        }

        .navbar-brand {
            font-family: 'Montserrat', sans-serif;
            font-weight: bold;
            color: white;
        }

        .navbar-nav .nav-link {
            color: white;
        }

        .product-card {
            background-color: #1e1e1e; /* Dark card background */
            color: white;
            border-radius: 8px;
            border: none;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .product-card img {
            border-radius: 8px;
            width: 100%;
            height: 200px; /* Fixed height */
            object-fit: cover; /* Cover the entire area while maintaining aspect ratio */
        }

        .btn-primary {
            background-color: #1DB954;
            border: none;
        }

        .section-header {
            font-family: 'Montserrat', sans-serif;
            font-size: 24px;
            font-weight: bold;
            color: white;
            margin-bottom: 20px;
        }

        .product-price {
            color: #1DB954;
            font-weight: bold;
        }

        a.btn-primary:hover {
            background-color: #17a547; /* Darker green on hover */
        }

        footer a {
            color: #1DB954;
        }

        footer a:hover {
            color: #17a547;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">LoveMusic</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="checkout">Shop</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Log Out
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('actionlogout') }}">
                            <i class="fa fa-power-off"></i> Log Out
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Popular Instruments Section -->
    <div class="container my-4">
        <div class="section-header">Guitars</div>
        <div class="row">
            <!-- First Instrument -->
            <div class="col-md-3 mb-4">
                <div class="product-card p-3">
                    <div class="product-image">
                        <img src="assets/image/fender.jpg" alt="Fender Stratocaster" class="img-fluid">
                    </div>
                    <h5 class="mt-3">Fender Stratocaster</h5>
                    <p class="product-price">$1,200</p>
                </div>
            </div>

            <!-- Second Instrument -->
            <div class="col-md-3 mb-4">
                <div class="product-card p-3">
                    <div class="product-image">
                        <img src="assets/image/guitar.jpg" alt="Gibson Les Paul" class="img-fluid">
                    </div>
                    <h5 class="mt-3">Gibson Les Paul</h5>
                    <p class="product-price">$2,500</p>
                </div>
            </div>

            <!-- Third Instrument -->
            <div class="col-md-3 mb-4">
                <div class="product-card p-3">
                    <div class="product-image">
                        <img src="assets/image/acoustic.jpg" alt="Ibanez RG550" class="img-fluid">
                    </div>
                    <h5 class="mt-3">Acoustic Yamaha</h5>
                    <p class="product-price">$200</p>
                </div>
            </div>

            <!-- Fourth Instrument -->
            <div class="col-md-3 mb-4">
                <div class="product-card p-3">
                    <div class="product-image">
                        <img src="assets/image/pacifica.jpg" alt="Yamaha Pacifica" class="img-fluid">
                    </div>
                    <h5 class="mt-3">Yamaha Pacifica</h5>
                    <p class="product-price">$700</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Products Section -->
    <div class="container my-4">
        <div class="section-header">Featured Products</div>
        <div class="row">
            <!-- First Product -->
            <div class="col-md-4 mb-4">
                <div class="card product-card">
                    <img src="assets/image/piano.jpg" class="card-img-top" alt="Yamaha Grand Piano">
                    <div class="card-body">
                        <h5 class="card-title">Yamaha Grand Piano</h5>
                        <p class="product-price">$10,000</p>
                        <a href="{{ route('shop.checkout', ['id' => 1]) }}" class="btn btn-primary">Buy Now</a> <!-- Pass ID 1 -->
                    </div>
                </div>
            </div>

            <!-- Second Product -->
            <div class="col-md-4 mb-4">
                <div class="card product-card">
                    <img src="assets/image/drum.jpg" class="card-img-top" alt="Pearl Drum Set">
                    <div class="card-body">
                        <h5 class="card-title">Pearl Drum Set</h5>
                        <p class="product-price">$2,200</p>
                        <a href="{{ route('shop.checkout', ['id' => 2]) }}" class="btn btn-primary">Buy Now</a> <!-- Pass ID 2 -->
                    </div>
                </div>
            </div>

            <!-- Third Product -->
            <div class="col-md-4 mb-4">
                <div class="card product-card">
                    <img src="assets/image/selmer.jpg" class="card-img-top" alt="Selmer Saxophone">
                    <div class="card-body">
                        <h5 class="card-title">Selmer Saxophone</h5>
                        <p class="product-price">$3,500</p>
                        <a href="{{ route('shop.checkout', ['id' => 3]) }}" class="btn btn-primary">Buy Now</a> <!-- Pass ID 3 -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="mt-4" style="background-color: #ff0000; color: rgb(76, 0, 255); padding: 20px 0;">
        <div class="container">
            <div class="row">
                <!-- About Us -->
                <div class="col-md-4">
                    <h5>About LoveMusic</h5>
                    <p>We offer a wide range of musical instruments for all music enthusiasts. Whether you're a beginner or a professional, you'll find the perfect instrument here.</p>
                </div>

                <!-- Customer Service -->
                <div class="col-md-4">
                    <h5>Customer Service</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" style="color: #1DB954;">Contact Us</a></li>
                        <li><a href="#" style="color: #1DB954;">Shipping & Returns</a></li>
                        <li><a href="#" style="color: #1DB954;">FAQ</a></li>
                        <li><a href="#" style="color: #1DB954;">Privacy Policy</a></li>
                    </ul>
                </div>

                <!-- Follow Us -->
                <div class="col-md-4">
                    <h5>Follow Us</h5>
                    <div>
                        <a href="#" style="color: #1DB954; margin-right: 10px;"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" style="color: #1DB954; margin-right: 10px;"><i class="fab fa-twitter"></i></a>
                        <a href="#" style="color: #1DB954; margin-right: 10px;"><i class="fab fa-instagram"></i></a>
                        <a href="#" style="color: #1DB954; margin-right: 10px;"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <hr style="background-color: #333;">
            <div class="text-center" style="font-size: 14px;">
                <p>&copy; 2024 LoveMusic. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- FontAwesome for social icons (optional) -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
