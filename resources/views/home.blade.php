@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- HERO -->
<section class="hero-card mb-5">
    <div class="row align-items-center">
        <div class="col-lg-6 hero-left">
            <h1 class="display-4 fw-bold text-gradient">Enjoy Every Bite Quality Bakes, Curated for You</h1>
            <p class="lead text-muted mt-3">
                Bakery offering fresh breads, donuts, cookies, <br>and premium snack box for any occasion.
            </p>

            <div class="mt-4 d-flex gap-3 flex-wrap">
                <a href="{{ route('products.index') }}" class="btn btn-pink btn-lg px-4">
                    <i class="fa-solid fa-shopping-bag me-2"></i> Shop Now
                </a>
                <a href="#categories" class="btn btn-outline-pink btn-lg px-4">
                    <i class="fa-solid fa-th-large me-2"></i> Browse Categories
                </a>
            </div>

            <!-- Feature Badges -->
            <div class="d-flex gap-4 mt-4 flex-wrap">
                <div class="d-flex align-items-center">
                    <div class="feature-icon-sm">
                        <i class="fa-solid fa-fire text-danger"></i>
                    </div>
                    <small class="text-muted ms-2">Fresh Daily</small>
                </div>
                <div class="d-flex align-items-center">
                    <div class="feature-icon-sm">
                        <i class="fa-solid fa-leaf text-success"></i>
                    </div>
                    <small class="text-muted ms-2">Natural Ingredients</small>
                </div>
                <div class="d-flex align-items-center">
                    <div class="feature-icon-sm">
                        <i class="fa-solid fa-truck text-primary"></i>
                    </div>
                    <small class="text-muted ms-2">Fast Delivery</small>
                </div>
            </div>
        </div>

        <div class="col-lg-6 text-center mt-4 mt-lg-0">
            <div class="hero-image-wrapper">
                <img src="https://res.cloudinary.com/dde7nabsx/image/upload/v1767420334/IMG_9251_pbyge9_xjwxgx.jpg"
                    alt="Delicious Cookies" class="hero-image">
                <div class="hero-image-badge">
                    <span class="badge-discount">20% OFF</span>
                    <span class="badge-text">First Order</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FEATURES -->
<section class="mb-5">
    <div class="row g-4">
        <div class="col-md-4">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fa-solid fa-cookie-bite"></i>
                </div>
                <h5 class="fw-bold mt-3">Freshly Baked</h5>
                <p class="text-muted small mb-0">Setiap produk dipanggang segar dari oven setiap hari.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fa-solid fa-award"></i>
                </div>
                <h5 class="fw-bold mt-3">Premium Quality</h5>
                <p class="text-muted small mb-0">Hanya menggunakan bahan-bahan berkualitas tinggi.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fa-solid fa-truck-fast"></i>
                </div>
                <h5 class="fw-bold mt-3">Fast Delivery</h5>
                <p class="text-muted small mb-0">Pesanan dikirim cepat dan dikemas dengan aman.</p>
            </div>
        </div>
    </div>
</section>

<!-- CATEGORIES -->
<section id="categories" class="mb-5">
    <div class="section-header text-center mb-4">
        <h2 class="fw-bold">Browse by Category</h2>
        <p class="text-muted">Temukan produk favorit berdasarkan kategori</p>
    </div>

    <div class="row g-4">
        @forelse($categories as $category)
        <div class="col-6 col-md-3">
            <a href="{{ route('products.category', $category->slug) }}" class="category-card text-decoration-none">
                <div class="category-icon">
                    @switch($category->name)
                    @case('Cookies')
                    🍪
                    @break
                    @case('Donuts')
                    🍩
                    @break
                    @case('Cakes')
                    🎂
                    @break
                    @case('Brownies')
                    🍫
                    @break
                    @case('Pastries')
                    🥐
                    @break
                    @default
                    🧁
                    @endswitch
                </div>
                <h6 class="mt-2 mb-0 fw-semibold">{{ $category->name }}</h6>
                <small class="text-muted">{{ $category->products_count ?? 0 }} products</small>
            </a>
        </div>
        @empty
        <div class="col-6 col-md-3">
            <div class="category-card">
                <div class="category-icon">🍪</div>
                <h6 class="mt-2 mb-0 fw-semibold">Traditional Cake</h6>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="category-card">
                <div class="category-icon">🍩</div>
                <h6 class="mt-2 mb-0 fw-semibold">Donuts</h6>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="category-card">
                <div class="category-icon">🎂</div>
                <h6 class="mt-2 mb-0 fw-semibold">Sweet</h6>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="category-card">
                <div class="category-icon">🥐</div>
                <h6 class="mt-2 mb-0 fw-semibold">salty</h6>
            </div>
        </div>
        @endforelse
    </div>
</section>

<!-- FEATURED PRODUCTS -->
<section id="featured" class="mb-5">
    <div class="section-header d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-1">Featured Products</h2>
            <p class="text-muted mb-0">Produk terlaris dan paling disukai</p>
        </div>
        <a href="{{ route('products.index') }}" class="btn btn-outline-pink">
            View All <i class="fa-solid fa-arrow-right ms-1"></i>
        </a>
    </div>

    <div class="row g-4">
        @forelse($featuredProducts as $product)
        <div class="col-6 col-lg-3">
            <div class="product-card h-100">
                <div class="product-image-wrapper">
                    @if($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="product-image">
                    @else
                    <img src="https://images.unsplash.com/photo-1499636136210-6f4ee915583e?w=300&h=300&fit=crop"
                        alt="{{ $product->name }}" class="product-image">
                    @endif
                    @if($product->stock < 5 && $product->stock > 0)
                        <span class="product-badge bg-warning">Low Stock</span>
                        @elseif($product->stock == 0)
                        <span class="product-badge bg-danger">Sold Out</span>
                        @endif
                </div>
                <div class="product-info">
                    <span class="product-category">{{ $product->category->name ?? 'Uncategorized' }}</span>
                    <h6 class="product-title">{{ $product->name }}</h6>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="product-price">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                        @if($product->stock > 0)
                        <form action="{{ route('cart.add') }}" method="POST" class="d-inline">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <input type="hidden" name="quantity" value="1">
                            <button type="submit" class="btn btn-sm btn-pink">
                                <i class="fa-solid fa-cart-plus"></i>
                            </button>
                        </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @empty
        @php
        $sampleProducts = [
        ['title' => 'Chocolate Chip Cookie', 'price' => 15000, 'img' => 'https://images.unsplash.com/photo-1499636136210-6f4ee915583e?w=300&h=300&fit=crop'],
        ['title' => 'Pink Glazed Donut', 'price' => 18000, 'img' => 'https://images.unsplash.com/photo-1551024601-bec78aea704b?w=300&h=300&fit=crop'],
        ['title' => 'Red Velvet Cake', 'price' => 85000, 'img' => 'https://images.unsplash.com/photo-1586788680434-30d324b2d46f?w=300&h=300&fit=crop'],
        ['title' => 'Fudge Brownies', 'price' => 25000, 'img' => 'https://images.unsplash.com/photo-1606313564200-e75d5e30476c?w=300&h=300&fit=crop'],
        ];
        @endphp
        @foreach($sampleProducts as $p)
        <div class="col-6 col-lg-3">
            <div class="product-card h-100">
                <div class="product-image-wrapper">
                    <img src="{{ $p['img'] }}" alt="{{ $p['title'] }}" class="product-image">
                </div>
                <div class="product-info">
                    <span class="product-category">Cookies</span>
                    <h6 class="product-title">{{ $p['title'] }}</h6>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="product-price">Rp {{ number_format($p['price'], 0, ',', '.') }}</span>
                        <button class="btn btn-sm btn-pink">
                            <i class="fa-solid fa-cart-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @endforelse
    </div>
</section>

<!-- PROMO BANNER -->
<section class="promo-banner mb-5">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h3 class="fw-bold mb-2">🎉 First Order Discount!</h3>
            <p class="mb-0 text-muted">Dapatkan diskon 20% untuk pembelian pertama kamu. Gunakan kode <span class="promo-code">SWEET20</span> saat checkout!</p>
        </div>
        <div class="col-md-4 text-md-end mt-3 mt-md-0">
            <a href="{{ route('products.index') }}" class="btn btn-pink btn-lg">
                <i class="fa-solid fa-tag me-2"></i> Shop Now
            </a>
        </div>
    </div>
</section>

<!-- WHY CHOOSE US -->
<section class="mb-5">
    <div class="row align-items-center g-4">
        <div class="col-lg-6">
            <img src="https://res.cloudinary.com/dppmxyqt4/image/upload/v1767450060/WhatsApp_Image_2026-01-03_at_19.25.39_mrstke.jpg"
                alt="Our Kitchen" class="img-fluid rounded-4 shadow">
        </div>
        <div class="col-lg-6">
            <h2 class="fw-bold mb-4">Why Choose Jeycookie?</h2>
            <div class="why-item mb-3">
                <div class="why-icon"><i class="fa-solid fa-check"></i></div>
                <div>
                    <h6 class="fw-semibold mb-1">No Preservatives</h6>
                    <p class="text-muted small mb-0">100% bahan alami tanpa pengawet buatan.</p>
                </div>
            </div>
            <div class="why-item mb-3">
                <div class="why-icon"><i class="fa-solid fa-check"></i></div>
                <div>
                    <h6 class="fw-semibold mb-1">Baked Fresh Every Morning</h6>
                    <p class="text-muted small mb-0">Produk dibuat segar setiap hari.</p>
                </div>
            </div>
            <div class="why-item mb-3">
                <div class="why-icon"><i class="fa-solid fa-check"></i></div>
                <div>
                    <h6 class="fw-semibold mb-1">Hygienic Production</h6>
                    <p class="text-muted small mb-0">Proses produksi yang bersih dan terstandar.</p>
                </div>
            </div>
            <div class="why-item">
                <div class="why-icon"><i class="fa-solid fa-check"></i></div>
                <div>
                    <h6 class="fw-semibold mb-1">Satisfaction Guaranteed</h6>
                    <p class="text-muted small mb-0">Garansi kepuasan atau uang kembali.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TESTIMONIALS -->
<section class="mb-5">
    <div class="section-header text-center mb-4">
        <h2 class="fw-bold">What Our Customers Say</h2>
        <p class="text-muted">Testimoni dari pelanggan setia kami</p>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="testimonial-card">
                <div class="testimonial-rating mb-2">
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                </div>
                <p class="testimonial-text">"suka bangeet snackbox nyaa!! bolunya enak dan rasanyaa beda banget sama bolu-bolu di tempat lain.
                    risoles bolognaise nya juga enakk bangeet, tadi dapet review dari tamu yg premium kalau isiannya mewah
                    intinya rating snack box 9,5/10 enak binggo sampe banyaak yg pengen nambah"</p>
                <div class="testimonial-author">
                    <img src="https://i.pravatar.cc/50?img=1" alt="Customer" class="testimonial-avatar">
                    <div>
                        <h6 class="mb-0 fw-semibold">Universitas Muhammadiyah Dr. Hamka</h6>
                        <small class="text-muted">Jakarta</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="testimonial-card">
                <div class="testimonial-rating mb-2">
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                </div>
                <p class="testimonial-text">"Roti, risol, dadar gulungnyaa enak semuaa.. anak" & volunteer pd sukaa!!
                    Pengirimannya jg pas bgtt ga telatt dan ga repott (karna jujur aku ga terus"an buka hp gituu untuk cek konsum udh dmn)
                    tbtb udh sampee ajaa depan Rumah Belajarnya"</p>
                <div class="testimonial-author">
                    <img src="https://i.pravatar.cc/50?img=3" alt="Customer" class="testimonial-avatar">
                    <div>
                        <h6 class="mb-0 fw-semibold">Kominitas Kindy Seeds</h6>
                        <small class="text-muted">Bandung</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="testimonial-card">
                <div class="testimonial-rating mb-2">
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star-half-stroke text-warning"></i>
                </div>
                <p class="testimonial-text">"enakkkk bgttt kaak susnya, tekstur flanya lembut banget,kayak ice cream creamy bgtt."</p>
                <div class="testimonial-author">
                    <img src="https://i.pravatar.cc/50?img=5" alt="Customer" class="testimonial-avatar">
                    <div>
                        <h6 class="mb-0 fw-semibold">Ulan</h6>
                        <small class="text-muted">Depok</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- NEWSLETTER -->
<section class="newsletter-section mb-5">
    <div class="row align-items-center">
        <div class="col-lg-6">
            <h3 class="fw-bold mb-2">Join Our Sweet Community! 🍩</h3>
            <p class="text-muted mb-0">Dapatkan promo eksklusif dan info produk terbaru langsung ke email kamu.</p>
        </div>
        <div class="col-lg-6">
            <form class="newsletter-form d-flex gap-2 mt-3 mt-lg-0">
                <input type="email" class="form-control input-newsletter" placeholder="Masukkan email kamu" required>
                <button type="submit" class="btn btn-pink px-4">
                    <i class="fa-solid fa-paper-plane me-1"></i> Subscribe
                </button>
            </form>
        </div>
    </div>
</section>

@endsection