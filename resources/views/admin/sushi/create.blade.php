@extends('layouts.app')

@section('content')
    <div class="container">

        <form action="{{ route('admin.sushi.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" class="form-control" value="{{ old('name') }}" name="name" id="name"
                    placeholder="Inserisci il nome">
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="image">Immagine </label>
                <input type="text" class="form-control" name="image" value="{{ old('image') }}" id="image"
                    placeholder="Inserisci url">
                @error('image')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="description">Descrizione</label>
                <textarea class="form-control" name="description" id="description" cols="30" placeholder="Inserisci descrizione"
                    rows="10">{{ old('description') }}</textarea>
                @error('description')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>


            <div class="form-group">
                <label for="price">Prezzo</label>
                <input type="text" class="form-control" value="{{ old('price') }}" name="price" id="price"
                    placeholder="Inserisci prezzo">
                @error('price')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
@endsection
