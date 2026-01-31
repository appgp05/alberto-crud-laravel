<div class="w-full h-20 flex items-center justify-evenly bg-blue-500">
    <img src="{{ asset('img/logo.png') }}" alt="{{__('logo')}}" class="w-20 h-20">
    <h1>{{__("Gestión de proyectos")}}</h1>
    <div class="flex">
        @guest()
            <form method="GET" action="{{route('login')}}">
                <button type="submit" class="btn btn-secondary">{{__("Login")}}</button>
            </form>
            <form method="GET" action="{{route('register')}}">
                <button type="submit" class="btn btn-secondary">{{__("Registro")}}</button>
            </form>
        @endguest
        @auth()
            <div class="flex items-center justify-center gap-5">
                Usuario: {{auth()->user()->name}}
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-secondary">{{__("Cerrar sesión")}}</button>
                </form>
            </div>
        @endauth
    </div>
</div>
