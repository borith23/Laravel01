@extends('template')
@section('title')
    Customer Page
@endsection
@section('body')
@if (count($customers) > 0)
@foreach ($customers as $item)
    {{ $item }}
@endforeach
@else
    Don't have customers!!!
@endif
@endsection
   

