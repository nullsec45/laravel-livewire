<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <x-nav-link :active="request()->routeIs('home')" href="{{url('/home')}}">Home</x-nav-link>
        <!-- <x-nav-link :active="request()->routeIs('posts.*')" href="{{url('/posts')}}">Posts</x-nav-link> -->
        <x-nav-link :active="request()->routeIs('timeline.*')" href="{{url('/timeline')}}">Timeline</x-nav-link>
        <x-nav-link :active="request()->routeIs('users.*')" href="{{url('/users')}}">Users</x-nav-link>

      </ul>

      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          @auth
           <form action="{{route('logout')}}" method="POST">
            @csrf
            <button class="btn nav-links" type="submit">Log out</button>
           </form>
          @else
            <x-nav-link  href="{{url('/login')}}">Log in</x-nav-link>
          @endauth
        </ul>
    </div>
  </div>
</nav>