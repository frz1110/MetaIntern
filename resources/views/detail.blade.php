<x-app-layout>
   
    <div class="container">
        <img src={{ $resep -> image_path}} class="img-detail" alt="...">
        <h1 class="card-title mt-3">{{$resep -> nama}}</h1>
                <p class="card-text">{{$resep -> deskripsi}}</p>
      
    </div>
    
    </x-app-layout>