@extends('layouts.app')
@section('content')

    <h1>create Page</h1>

    <section class="container">
        <form action="{{ route('books.store') }}" method="post">
            @csrf

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" name="price" class="form-control">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Bio</label>
                        <textarea class="form-control" name="bio" rows="3"></textarea>
                    </div>
                </div>
            </div>
            <div class="row pt-4 text-center">
                <div class="col">
                    <button type="reset" class="btn btn-danger">Annuler</button>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-success">Create</button>
                </div>
            </div>
        </form>
    </section>

@endsection