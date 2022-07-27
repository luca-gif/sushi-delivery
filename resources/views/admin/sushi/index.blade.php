@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Immagine</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Comandi</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($foods as $food)
                    <tr>
                        <th scope="row">{{ $food->id }}</th>
                        <td>{{ $food->name }}</td>

                        <td>
                            <img style="width: 100px" src="{{ $food->image }}" alt="{{ $food->name }}"
                                title="{{ $food->name }}">
                        </td>

                        <td> € {{ $food->price }}</td>
                        <td>{{ $food->position }}</td>


                        <td>
                            <a href="{{ route('admin.sushi.show', $food) }}" class="btn btn-outline-primary">Mostra</a>

                            <a href="{{ route('admin.sushi.edit', $food) }}" class="btn btn-outline-success">Modifica</a>

                            <form class="d-inline-block" action="{{ route('admin.sushi.destroy', $food) }}" method="POST"
                                onsubmit="return confirm('Sei sicuro di voler eliminare'{{ $food->name }}?)">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-dark">Elimina</button>
                            </form>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>

        {{ $foods->links() }}
    </div>
@endsection
