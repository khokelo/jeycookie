@extends('layouts.app')

@section('title', 'About Us')

@section('content')

<!-- Hero Section -->
<section class="about-hero text-center py-5 mb-5">
    <div class="container">
        <h1 class="display-4 fw-bold text-gradient mb-3">About Jeycookie</h1>
        <p class="lead text-muted mx-auto" style="max-width: 600px;">
            Authentic flavors. Premium ingredients.
        </p>
    </div>
</section>

<!-- Story Section -->
<section class="mb-5">
    <div class="row align-items-center g-5">
        <div class="col-lg-6">
            <img src="https://res.cloudinary.com/dppmxyqt4/image/upload/v1767450060/WhatsApp_Image_2026-01-03_at_19.20.39_sru2be.jpg"
                alt="Jeycookie Products"
                class="img-fluid rounded-4 shadow">
        </div>
        <div class="col-lg-6">
            <p class="text-muted mb-4">
                Welcome to Jeeycookie, your little corner of happiness in every bite.
                We believe that cookies aren’t just snacks they’re comfort, warmth, and love made edible.
            </p>
            <p class="text-muted mb-4">
                At Jeeycookie, every batch is handcrafted with care using premium ingredients and our special homemade recipes.
                From chewy chocolate chips to soft butter cookies, each one is baked fresh to give you that perfect balance
                of sweetness and texture.
            </p>
            <p class="text-muted">
                We value quality, creativity, and joy in every creation because every cookie should make you smile.
                Whether it’s for gifting, sharing, or simply treating yourself, Jeeycookie is here to sweeten your day, one cookie at a time.
            </p>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="mb-5 py-5 bg-light rounded-4">
    <div class="container">
        <h2 class="fw-bold text-center mb-5">Nilai-Nilai Kami</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="text-center">
                    <div class="value-icon mx-auto mb-3">
                        <i class="fa-solid fa-heart"></i>
                    </div>
                    <h5 class="fw-bold">Taste You Can Rely On</h5>
                    <p class="text-muted">
                        Jeyco menghadirkan rasa yang dapat diandalkan,
                        baik untuk momen sehari-hari maupun kesempatan spesial.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <div class="value-icon mx-auto mb-3">
                        <i class="fa-solid fa-leaf"></i>
                    </div>
                    <h5 class="fw-bold">Premium Ingredients Only</h5>
                    <p class="text-muted">
                        Kami menggunakan bahan-bahan pilihan berkualitas tinggi
                        untuk menghasilkan rasa yang konsisten, autentik, dan memuaskan.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <div class="value-icon mx-auto mb-3">
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h5 class="fw-bold">Consistent Quality</h5>
                    <p class="text-muted">
                        Kualitas adalah prioritas utama kami.
                        Setiap produk Jeyco melewati proses quality control untuk menjaga standar rasa dan tekstur.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="mb-5">
    <h2 class="fw-bold text-center mb-5">Tim Kami</h2>
    <div class="row g-4 justify-content-center">
        <div class="col-md-4 col-lg-3">
            <div class="team-card text-center">
                <img src="https://res.cloudinary.com/dppmxyqt4/image/upload/v1767448751/WhatsApp_Image_2026-01-03_at_20.45.00_zge52j.jpg"
                    alt="Latifah Fauzia"
                    class="team-image mb-3">
                <h5 class="fw-bold mb-1">Latifah Fauzia</h5>
                <p class="text-muted small">Founder & Head Baker</p>
            </div>
        </div>
        <div class="col-md-4 col-lg-3">
            <div class="team-card text-center">
                <img src="https://res.cloudinary.com/dppmxyqt4/image/upload/v1767448752/Gemini_Generated_Image_8h7h8e8h7h8e8h7h_p1stiy.png"
                    alt="M.Irfan Janur Ghifari"
                    class="team-image mb-3">
                <h5 class="fw-bold mb-1">M.Irfan Janur Ghifari</h5>
                <p class="text-muted small">Backend Developer</p>
            </div>
        </div>
        <div class="col-md-4 col-lg-3">
            <div class="team-card text-center">
                <img src="https://res.cloudinary.com/dppmxyqt4/image/upload/v1767448750/WhatsApp_Image_2026-01-03_at_20.19.30_xjrpdz.jpg"
                    alt="Muhamad Kaisar Hudayef"
                    class="team-image mb-3">
                <h5 class="fw-bold mb-1">Kaisar Hudayef</h5>
                <p class="text-muted small">Database Specialist</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Info -->
<section class="mb-5">
    <div class="row g-4">
        <div class="col-lg-6">
            <div class="card h-100">
                <div class="card-body">
                    <h4 class="fw-bold mb-4">
                        <i class="fa-solid fa-location-dot text-pink me-2"></i> Lokasi Kami
                    </h4>
                    <p class="text-muted mb-3">
                        <strong>Jeycookie Bakery</strong><br>
                        Jl.pakis, RT.8/RW.5,<br>
                        Griya pakis No.10-B,kel.beji,<br>
                        kota depok, jawa barat
                    </p>
                    <p class="text-muted mb-0">
                        <i class="fa-solid fa-clock me-2"></i>
                        Buka setiap hari: 08:00 - 20:00 WIB
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card h-100">
                <div class="card-body">
                    <h4 class="fw-bold mb-4">
                        <i class="fa-solid fa-phone text-pink me-2"></i> Hubungi Kami
                    </h4>
                    <p class="text-muted mb-2">
                        <i class="fa-solid fa-phone me-2"></i>
                        +62 852-1056-7503
                    </p>
                    <p class="text-muted mb-2">
                        <i class="fa-brands fa-whatsapp me-2"></i>
                        +62 852-1056-7503 (WhatsApp)
                    </p>
                    <p class="text-muted mb-2">
                        <i class="fa-solid fa-envelope me-2"></i>
                        hello@jeycookie.com
                    </p>
                    <p class="text-muted mb-0">
                        <i class="fa-brands fa-instagram me-2"></i>
                        @jeycookie
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="text-center py-5 mb-4">
    <h3 class="fw-bold mb-3">Siap untuk Mencoba?</h3>
    <p class="text-muted mb-4">Jelajahi koleksi produk kami dan temukan favorit Anda!</p>
    <a href="{{ route('products.index') }}" class="btn btn-pink btn-lg">
        <i class="fa-solid fa-shopping-bag me-2"></i> Lihat Produk
    </a>
</section>

@endsection

@push('styles')
<style>
    .about-hero {
        background: linear-gradient(135deg, var(--pink-50), var(--peach-50));
        border-radius: var(--radius-xl);
        margin-top: -1rem;
    }

    .value-icon {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, var(--pink-500), var(--pink-600));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        color: white;
    }

    .team-image {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        object-fit: cover;
        border: 4px solid var(--pink-100);
    }

    .team-card {
        padding: 1.5rem;
        background: white;
        border-radius: var(--radius-lg);
        box-shadow: var(--shadow);
        transition: transform 0.3s ease;
    }

    .team-card:hover {
        transform: translateY(-5px);
    }

    .text-pink {
        color: var(--pink-600);
    }
</style>
@endpush