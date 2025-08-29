@extends('layouts.app')

@section('content')
<div class="container mx-auto py-10">
    <h1 class="text-3xl font-bold text-blue-700 mb-6">Admin Dashboard</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Card 1 -->
        <div class="bg-white shadow-lg rounded-xl p-6">
            <h2 class="text-xl font-semibold mb-2">Total Users</h2>
            <p class="text-gray-600">150</p>
        </div>

        <!-- Card 2 -->
        <div class="bg-white shadow-lg rounded-xl p-6">
            <h2 class="text-xl font-semibold mb-2">Pending Requests</h2>
            <p class="text-gray-600">10</p>
        </div>

        <!-- Card 3 -->
        <div class="bg-white shadow-lg rounded-xl p-6">
            <h2 class="text-xl font-semibold mb-2">Reports</h2>
            <p class="text-gray-600">5</p>
        </div>
    </div>
</div>
@endsection
