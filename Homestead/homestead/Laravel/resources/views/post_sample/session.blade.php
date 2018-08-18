@extends('layouts.my')
 
 @section('content')
 	<p>{{$session_data}}</p>
  	<form action="/enma/session" method="post">
     {{ csrf_field() }}
     <input type="text" name="input">
     <input type="submit" value="send">
     </form>
 @endsection

