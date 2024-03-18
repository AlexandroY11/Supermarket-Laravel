@extends('layouts.plantilla')

@section('title', 'Iniciar Sesión')

@section('body')

<div>
    <form wire:submit.prevent="login">
        <input type="email" wire:model="email" placeholder="Email" class="mb-2">
        <input type="password" wire:model="password" placeholder="Password" class="mb-2">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Iniciar Sesión</button>
    </form>
</div>

@endsection
