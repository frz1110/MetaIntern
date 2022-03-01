<x-app-layout>
   
<div class="container">
    <div class="row ">
    @foreach ($reseps as $resep )
    <div class="col-md-4 mb-4">
        <a class="detail-link" href="{{route('detail', ['id' => $resep -> id])}}">
            <div class=" card" style="width: 18rem; height:25rem">
                <img src={{ $resep -> image_path}} class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{$resep -> nama}}</h5>
                <p class="card-text">{{$resep -> deskripsi}}</p>
                <a href="#" class="w-100 rounded-pill btn btn-primary">Suka</a>
                </div>
            </div>
        </a>
    </div>
      @endforeach
    </div>
</div>

</x-app-layout>
