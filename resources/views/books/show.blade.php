@extends('layouts.app')
@section('content')

    <div class=" container text-center pt-5  ">
        
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h3 class="card-title">{{ $book->title }}</h3>               
                <h4 class="color-info">{{ $book->prix }}DH</h4>
                <h5 class="color-info">{{ $book->bio }}</h5>
                <a href="{{ route('books.edit',[$book->id] ) }}" class="card-link btn btn-info ">Edit</a>
            </div>
            <p>Created at : {{ $book->created_at }} </p>
        </div>

    </div>
    @endsection