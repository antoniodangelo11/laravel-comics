<ul class="nav_menu">
    @foreach ($arrMenu as $item)
        <li><a href="{{ $item['link'] }}">{{ $item['title'] }}</a></li>
    @endforeach
</ul>
