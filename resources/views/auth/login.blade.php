@extends('layouts.authLayout')

@section('title','Login')

@section('content')
    <div class="w-[420px] h-screen flex items-center justify-center">
        <form method="POST" action="{{ route('authAdmin') }}" class="w-full py-6 px-4">
            @csrf
            <div class="w-full h-[130px] flex items-center justify-center relative">
                <img src="{{ asset('img/logo.webp') }}" alt="Logo de nekovibe" class="size-28">
                <h1 class="text-3xl text-white font-bold absolute bottom-0 ">Iniciar sessión</h1>
            </div>
            <div class="w-full flex flex-col gap-4 my-3 text-white">
                <div class="w-full flex flex-col gap-2.5 px-6 my-3">
                    <label for="email" class="text-lg font-semibold">Correo</label>
                    <input type="text" name="email" id="email" class="border-b border-white px-4 py-2 outline-none" autocomplete="off">
                </div>
                <div class="w-full flex flex-col px-6">
                    <label for="password" class="text-lg font-semibold">Contraseña</label>
                    <input type="password" name="password" id="password" class="border-b border-white px-4 py-2 outline-none" autocomplete="off">
                </div>
                    <a href="" class="text-center text-md text-white">Olvidaste tu contraseña?</a>
                <div class="w-full flex justify-center my-3">
                    <input type="submit" value="Iniciar Sesión" class="border border-white rounded-lg px-4 py-2 transition duration-500 hover:bg-white hover:text-black">
                </div>
            </div>
        </form>
    </div>
@endsection