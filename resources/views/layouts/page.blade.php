@extends('layouts.app')
@section('body')
<header>
    <div class="container">
        <div class="d-flex justify-content-end align-items-center h-100">
            <li><a class="ui-text-white ui-text-bold" href="/logout">Sair</a></li>
        </div>
    </div>
</header>
<main>
    @yield('content')
</main>
@endsection
