<br>
<?php ini_set('display_errors', "On"); ?>

<!--layoutsディレクトリのapp.blade.phpを継承--> 
@extends('layouts.app')
<!--yieldで指定した場所を読み込む--> 
@include('navbar')

@section('content')

<p>仮のトップページです。</p>

<a href="#" class="btn btn-primary">仮のボタンです</a>

@endsection