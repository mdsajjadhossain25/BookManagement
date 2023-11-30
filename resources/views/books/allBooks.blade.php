@extends('layouts/main')
@section('main-section')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12 d-flex justify-content-end"> <!-- Use 'd-flex' and 'justify-content-end' classes -->
            <a href="{{ route('create') }}" class="btn btn-primary">Create</a> <!-- Simplified button structure -->
        </div>
    </div>

    <div class="table-responsive">
        <table class="table">
            <!-- Your table content -->
            <thead>
                <tr>
                    <th>ISBN</th>
                    <th>Name</th>
                    <th>Author</th>
                    <th>Stock</th>
                    <th colspan="3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $singleBook)
                <tr class="">
                    <td >{{ $singleBook->isbn }}</td>
                    <td>{{ $singleBook->name }}</td>
                    <td>{{ $singleBook->author }}</td>
                    <td>
                        <button class="btn" >
                            @if ($singleBook->stock>0)
                             <span class="badge bg-primary">in stock</span>
                            @else
                            <span class="badge bg-danger">out of stock</span>
                            @endif
                        </button>
                    </td>
                    <td><a href="{{ route('show', $singleBook->id) }}" class="btn btn-primary">View</a></td>
                    <td><a href="{{ route('editItem', $singleBook->id) }}" class="btn btn-danger">Edit</a></td>
                    <td><a href="{{ route('deleteItem', $singleBook->id) }}" class="btn btn-danger">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
