<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    {{-- memanggil navbar --}}
    @include('layouts.navbar')
    {{-- navbar --}}
    {{-- memanggil content --}}
    {{-- content --}}
    <div class="section">
        <div class="container">
            <div class="row ">
                <center>
                    <h3>Data Produk</h3>
                </center>
            </div>

            <div class="row mt-5">

                <div class="col mt-5">
                    <div class="card" style="width: 18rem;">
                        <h4 class="card-text">  {{$produk->id}}</p>
                        <img src="https://images.bisnis.com/posts/2023/01/21/1620348/samsung-galaxy-a14-5g.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <center>
                                 <h5 class="card-text">{{$produk->nama_produk}}</h5>
                            <p class="card-text">jumlah produk: {{$produk->jumlah}}</p>
                            <p class="card-text">tanggal produksi: {{$produk->tanggal_produksi}}</p>
                            <p class="card-text">nama merk: {{$produk->merk->nama_merk}}</p>
                            <a href="" class="btn btn-primary">Go somewhere</a>
                            </center>

                        </div>
                    </div>
                </div>



            </div>
        </div>

    </div>
    </div>
    </div>



    {{-- /conttent --}}

    {{-- content --}}
    {{-- memanggil footer --}}
    @include('layouts.footer')
    {{-- footer --}}

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>


</body>

</html>
