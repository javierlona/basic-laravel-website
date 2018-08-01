<!-- Looks for a folder named 'layouts' and then a file 'app' -->
@extends('layouts.app')

<!-- searches for the spot 'content located in the app.blade.php file and inserts there' -->
@section('content')
  <h1>Home</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
@endsection

@section('sidebar')
  @parent
  <p>This is appended to the sidebar</p>
@endsection
