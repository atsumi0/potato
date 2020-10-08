@extends('layout.common')
@include('layout.header')
@include('layout.footer')
@include('layout.submenu')
@section('title', '追加画面')

@section('content')
<div class="container">
<h1>新規作成画面</h1>
<p><a href="{{ route('potato.index')}}">一覧画面</a></p>
 
<form action="{{ route('potato.store')}}" method="POST">
    @csrf
    <p>名前：<input type="text" name="title" value="{{old('name')}}"></p>
    <input type="submit" value="登録する">
</form>
</div>
@endsection