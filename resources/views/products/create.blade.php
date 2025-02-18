@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Dodaj produkt</h2>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nazwa</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Opis</label>
                <textarea name="description" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Cena</label>
                <input type="number" name="price" class="form-control" step="0.01" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Ilość</label>
                <input type="number" name="stock" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Zdjęcie</label>
                <input type="file" name="image" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Dodaj produkt</button>
        </form>
    </div>
@endsection
