@extends('layouts/main')
@section('main-section')
    <div class="container mt-4">
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <th>ISBN: </th>
                    <td>{{$book->isbn}}</td>
                </tr>
                <tr>
                    <th>Book Name: </th>
                    <td>{{$book->name}}</td>
                </tr>
                <tr>
                    <th>Author: </th>
                    <td>{{$book->author}}</td>
                </tr>
                <tr>
                    <th>Details: </th>
                    <td>{{$book->details}}</td>
                </tr>
                <tr>
                    <th>stock: </th>
                    <td>{{$book->stock}}</td>
                </tr>
                <tr>
                    <th>Created: </th>
                    <td>{{$book->created_at}}</td>
                </tr>
                <tr>
                    <th>Updated: </th>
                    <td>{{$book->updated_at}}</td>
                </tr>
            </table>
        </div>
        
    </div>
@endsection