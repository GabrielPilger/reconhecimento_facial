@extends('layouts.app')
@section('body')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card shadow">
                <div class="card-title text-center">
                    <h2 class="p-3">Conectar-se</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('login') }}" method="POST" class="text-center">
                        @csrf
                        <div class="mb-4">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Seu e-mail" required>
                        </div>
                        <div class="mb-4">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Sua senha" required>
                        </div>
                        @if ($errors->has('email'))
                        <span class="help-block mb-4">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                        <div class="d-grid">
                            <button type="submit" class="btn text-light main_bg">Entrar</button>
                        </div>
                        <p class="mt-4">Não possui conta ainda? <a href="{{ route('register') }}">Cadastre-se</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
