<nav class="nav flex-column">
    {{-- {{ $active }}<br/> --}}
    @foreach($list AS $row)
        <a class="nav-link {{ $isActive($row['label']) ?  'active' : ''}}" href="#">
            {{ $row['label']}}
        </a>
    @endforeach
    
</nav>