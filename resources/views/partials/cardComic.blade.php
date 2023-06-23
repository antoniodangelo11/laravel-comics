@foreach ($arrComics as $item)
    <div class="comic">
        <img class="img-fluid" src="{{ Vite::asset($item['thumb']) }}" alt="">
        <p>{{ $item['series'] }}</p>
    </div>
@endforeach