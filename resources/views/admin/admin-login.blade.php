@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow">
    <h2 class="text-xl font-bold mb-4 text-center">Login Admin</h2>

    <form method="POST" action="{{ route('admin.login.submit') }}">
    @csrf
    <div class="mb-4">
        <label>Email</label>
        <input type="email" name="email" class="w-full border p-2 rounded" required>
    </div>
    <div class="mb-4">
        <label>Password</label>
        <input type="password" name="password" class="w-full border p-2 rounded" required>
    </div>
    <button type="submit" class="w-full bg-blue-600 text-white p-2 rounded">Login</button>
</form>
</div>
@endsection
