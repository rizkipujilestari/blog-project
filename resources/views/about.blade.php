@extends('layouts.main') 

@section('title', 'About Us')

@section('content')
    <div class="container">
        <div class="row">
            <div class="span12">
                <h3>Selamat datang di CineReview! </h3>
                <p>
                    Kami adalah platform blog yang berdedikasi untuk menyajikan 
                    konten-konten menarik dan informatif seputar film, series, dan produksi sinema Indonesia maupun mancanegara. 
                    Tujuan kami adalah untuk menjadi sumber inspirasi dan pengetahuan bagi para pembaca, 
                    serta wadah bagi para penulis untuk berbagi ide dan gagasan mereka.
                </p>
                <p>
                    CineReview adalah wadah bagi para pecinta film dari seluruh penjuru untuk berkumpul dan berbagi passion mereka. 
                    Kami percaya bahwa diskusi yang hidup dan interaktif adalah kunci untuk memahami dan menikmati film 
                    secara lebih mendalam. Mari bergabung dalam komunitas kami, di mana setiap suara memiliki tempatnya!
                </p>

                <a href="{{ url('/register') }}" class="btn btn-theme btn-medium margintop10">Bergabung dengan Kami</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="divider" style="height: 100px;"></div>
    </div>

@endsection