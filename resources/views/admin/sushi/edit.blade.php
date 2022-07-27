@extends('layouts.app')

@section('content')
    <div class="container">

        <form action="{{ route('admin.sushi.update', $food) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" class="form-control" value="{{ old('name', $food->name) }}" name="name" id="name"
                    placeholder="Inserisci il nome">
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="image">Immagine </label>
                <input type="text" class="form-control" name="image" value="{{ old('image', $food->image) }}"
                    id="image" placeholder="Inserisci url">
                @error('image')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="description">Descrizione</label>
                <textarea class="form-control" name="description" id="description" cols="30" placeholder="Inserisci descrizione"
                    rows="10">{{ old('description', $food->description) }}</textarea>
                @error('description')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>


            <div class="form-group">
                <label for="price">Prezzo</label>
                <input type="text" class="form-control" value="{{ old('price', $food->price) }}" name="price"
                    id="price" placeholder="Inserisci prezzo">
                @error('price')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
@endsection
