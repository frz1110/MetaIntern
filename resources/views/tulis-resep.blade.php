<x-app-layout>
    <div class="container">
    <h2>Tulis Resepmu....</h2>

    <form method="post" action="/resep" enctype="multipart/form-data" >
        {{ csrf_field() }}
        <div class="form-group">
            <label for="titleid" class="col-sm-3 col-form-label">Judul:</label>
            <input name="judul" type="text" class="form-control" id="titleid" required>  
        </div>
        <div class="form-group">
            <label for="deskripsiid" class="col-sm-3 col-form-label">Deskripsi:</label>
            <input name="desc" type="text-area" class="form-control" id="publisherid" required>  
        </div>
        <div class="form-group">
            <label for="bahanid" class="col-sm-3 col-form-label"><h3>Bahan-Bahan:</h3></label>
            <input name="bahan" type="text" class="form-control" id="releasedateid" required>
           
        </div>
        <div class="form-group">
            <label for="langkahid" class="col-sm-3 col-form-label"><h3>Langkah Pembuatan:</h3></label>
            <input name="langkah" type="text" class="form-control" id="releasedateid" required>
           
        </div>
        <div class="form-group">
            <label for="imageid" class="col-sm-3 col-form-label">Masukkan URL Gambar:</label>
            <input name="image" type="text" id="imageid" class="form-control" required>  
        </div>
        <div class="form-group">
            <button type="submit" class="w-100 btn btn-primary">Tuliskan Resep</button>
        </div>
    </form>
</div>
</x-app-layout>