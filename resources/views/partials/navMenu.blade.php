<ul class="nav_menu">
    @foreach ($arrMenu as $item)
        <li><a href="#">{{ $item['title'] }}</a></li>
    @endforeach
</ul>
