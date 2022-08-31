
<div class="sidebar-user text-center">
    <a class="setting-primary" href="{{ route('profile')}}"><i data-feather="settings"></i></a>

    @if(strlen(Auth::user()->image)>0)
    <img class="img-90 rounded-circle" src="{{ asset(auth()->user()->image) }}" alt="" />
    @else
    <img class="img-90 rounded-circle" src="https://laravel.pixelstrap.com/viho/assets/images/dashboard/1.png" alt="">
    @endif
    <div class="badge-bottom"><span class="badge badge-primary">{{ Auth::user()->role->role }}</span></div>
    <a href="user-profile"> <h6 class="mt-3 f-14 f-w-600">{{ Auth::user()->name }}</h6></a>


</div>
