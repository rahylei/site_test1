<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    {{$title}}
  </a>
  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
    @foreach($list as $ofert)
    <li><a class="dropdown-item" href="#">{{$ofert->name}}</a></li>
    @endforeach
  </ul>
</li>