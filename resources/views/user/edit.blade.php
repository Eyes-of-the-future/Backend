@extends('layouts.app')
@section('title')
Edit User Profile
@endsection
@section('content')
<form action="/users/{{$users['id']}}" method="post" align="center">
        @csrf
        @method('put')
        <label class="form__input">Name</label> 
        <input type="text" name="name" value="{{$users->name}}" placeholder="name" class="form-control"><br><br>
        <label class="form__input">Email</label> 
        <input type="text" name="email" value="{{$users->email}}" placeholder="email" class="form-control"><br><br>
        <label class="form__input">Password</label> 
        <input type="text" name="password" value="{{$users->password}}" placeholder="password" class="form-control"><br><br>
        <input type="submit" class="btn btn-primary me-md-2">
    </form>
@endsection