<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YDrunk</title>
</head>
<body>
    <p>Bienvenue sur le site YDrunk</p>
    <a href="{{ route('alcoolstype.index')}}">Liste des types d'Alcools</a>
    <a href="{{ route('alcools.index')}}">Liste des Alcools</a>
    <a href="{{ route('softs.index')}}">Liste des Softs</a>
    <a href="{{ route('sirops.index')}}">Liste des Sirops</a>
    <div>
        <br>
        @if (Route::has('admin.login'))
        @auth('admin')
            <h3>Connecté en tant que : {{Auth::guard('admin')->user()->name}} - ADMIN</h3>
            <a href="{{url('/admin/dashboard')}}">Admin Dashboard</a>
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf

                <button :href="route('admin.logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </button>
            </form>
        @else
            <a href="{{ route('admin.login') }}">Admin Login</a>

        @if (Route::has('admin.register'))
            <a href="{{ route('admin.register') }}">Admin Register</a>
        @endif
        @endauth
        @endif
    </div>
</body>
</html>