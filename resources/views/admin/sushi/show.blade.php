@extends('layouts.app')

{{-- @dd($food); --}}


@section('content')
    <div class="container">

        <div class="card m-auto" style="width: 20rem;">
            <img class="card-img-top" src="{{ $food->image }}" alt="{{ $food->name }}" title="{{ $food->name }}">

            <div class="card-body">
                <h5 class="card-title">{{ $food->name }} - € {{ $food->price }}</h5>
                <p class="card-text">{{ $food->description }}</p>

                <a href="{{ route('admin.sushi.index') }}" class="btn btn-outline-primary">Torna indietro</a>
            </div>
        </div>


    </div>
@endsection
