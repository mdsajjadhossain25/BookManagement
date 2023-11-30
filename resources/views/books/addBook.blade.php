@extends('layouts/main')
@section('main-section')
    <div class="container mt-4">
        <center><h3 class="btn btn-success">Add Book</h3></center>
        <form action="{{route('storeBook')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input type="text" name="name" id="" class="form-control" placeholder="Enter Your Name" aria-describedby="helpId" value="{{old('name')}}">
                @if($errors->has('name'))
                    <div class="error text-danger">{{ $errors->first('name') }}</div>
                @endif
            </div>
            <div class="mb-3">
                <label for="" class="form-label">ISBN</label>
                <input type="text" name="isbn" id="" class="form-control" placeholder="Enter ISBN" aria-describedby="helpId" value="{{old('isbn')}}">
                @if($errors->has('isbn'))
                    <div class="error text-danger">{{ $errors->first('isbn') }}</div>
                @endif
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Author</label>
                <input type="text" name="author" id="" class="form-control" placeholder="Enter Author" aria-describedby="helpId" value="{{old('author')}}">
                @if($errors->has('author'))
                    <div class="error text-danger">{{ $errors->first('author') }}</div>
                @endif
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Stock</label>
                <input type="text" name="stock" id="" class="form-control" placeholder="Enter stock" aria-describedby="helpId" value="{{old('stock')}}">
                @if($errors->has('stock'))
                <div class="error text-danger">{{ $errors->first('stock') }}</div>
            @endif
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Details</label>
              <textarea class="form-control" name="details" id="" rows="3"></textarea>
              @if($errors->has('details'))
              <div class="error text-danger">{{ $errors->first('details') }}</div>
          @endif
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection