@extends('layouts.app')
@section('content')

    <h1>Edit Page</h1>
    
    <section class="container">
        <form action="{{route('books.update', $book->id)}}" method="post"  >
            @method('PUT')
            @csrf

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Edit Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Edit Price</label>
                        <input type="text" name="price" class="form-control">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Edit Bio</label>
                        <textarea class="form-control" name="bio" rows="2"></textarea>
                    </div>
                </div>
            </div>
            <div class="pt-4 text-center">
                <div class="col">
                    <button type="submit" class="btn btn-success">Edit</button>
                </div>
            </div>
        </form>
    </section>

@endsection