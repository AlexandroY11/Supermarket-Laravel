@extends('layouts.plantilla')

@section('title', 'Registrarse')

@section('body')

<div>
    <form wire:submit.prevent="register">
        <input type="text" wire:model="name" placeholder="Name" class="mb-2">
        <input type="email" wire:model="email" placeholder="Email" class="mb-2">
        <input type="password" wire:model="password" placeholder="Password" class="mb-2">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">¡Registrate!</button>
    </form>
</div>

@endsection
