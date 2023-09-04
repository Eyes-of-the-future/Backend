@extends('layouts.app')
@section('title')
User Profile
@endsection
@section('content')
<h2 align="center"> Welcome To Our Connect App</h2>
    <table class="table table-striped-columns" >
        <tr>
          <td class="btn btn-primary mb-3"><a href="/posts/index"> View all posts </a></td>
        </tr>
        <tr>
          <td class="btn btn-primary mb-3"><a href="/users/edit"> Edit Profile </a></td>
        </tr>
        
    </table>
@endsection