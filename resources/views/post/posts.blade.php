@extends('layouts.app')
@section('title')
All Posts
@endsection
@section('content')
<h2 align="center"> All Posts </h2>
    <table class="table table-striped-columns" >
        <th>ID</th>
        <th>Body</th>
        <th colspan="2"> Actions</th>
        @foreach($posts as $post)
        <tr>
            <td>{{ $post['id'] }}</td>
            <td>{{ $post['body'] }}</td>  
        </tr>
        
        @endforeach
    </table>
@endsection