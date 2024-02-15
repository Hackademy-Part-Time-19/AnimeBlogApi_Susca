<x-main-layout>
    <x-NavbarMain/>
    <div class="container">
        <div class="row">

            <h1 style="color: rgb(228, 228, 228)">Anime di genere:</h1>
                @foreach($anime as $anime)
                <div class="col-4">
                    <div class="card" style="width: 20rem;">
                        <img src="{{$anime['images']['jpg']['image_url']}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$anime['title']}}</h5>
                            <p class="card-text">{{Str::limit($anime['synopsis'],50)}}</p>
                            <a href="{{route('anime.byId',['id'=>$anime['mal_id']])}}" class="btn btn-primary">Dettagli</a>
                        </div>
                    </div>
                </div>
                @endforeach

        </div>
    </div>

</x-main-layout>
