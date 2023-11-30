@extends('layouts/main')
@section('main-section')
<div class="container mt-4">
    <center><h3 class="btn btn-success">Update Book</h3></center>
    <form action="{{route('update', $book->id)}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$book->id}}">
        <div class="mb-3">
            <label for="" class="form-label">Name</label>
            <input type="text" name="name" id="" class="form-control" placeholder="Enter Your Name" aria-describedby="helpId" value="{{old('name', $book->name)}}">
            @if($errors->has('name'))
                <div class="error text-danger">{{ $errors->first('name') }}</div>
            @endif
        </div>
        <div class="mb-3">
            <label for="" class="form-label">ISBN</label>
            <input type="text" name="isbn" id="" class="form-control" placeholder="Enter ISBN" aria-describedby="helpId" value="{{old('isbn', $book->isbn)}}">
            @if($errors->has('isbn'))
                <div class="error text-danger">{{ $errors->first('isbn') }}</div>
            @endif
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Author</label>
            <input type="text" name="author" id="" class="form-control" placeholder="Enter Author" aria-describedby="helpId" value="{{old('author', $book->author)}}">
            @if($errors->has('author'))
                <div class="error text-danger">{{ $errors->first('author') }}</div>
            @endif
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Stock</label>
            <input type="text" name="stock" id="" class="form-control" placeholder="Enter stock" aria-describedby="helpId" value="{{old('stock', $book->stock)}}">
            @if($errors->has('stock'))
            <div class="error text-danger">{{ $errors->first('stock') }}</div>
        @endif
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Details</label>
          <input type="text" class="form-control" name="details" value="{{old('details', $book->details)}}"></input>
          @if($errors->has('details'))
          <div class="error text-danger">{{ $errors->first('details') }}</div>
      @endif
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection