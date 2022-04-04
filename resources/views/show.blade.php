@extends('layouts.app')

@section('content')
<div class="card-header">{{ __('Show') }}</div>

<div class="card-body">
<div>
    <div><label>{{ __('Name')}}: </label> {{$user[0]->name}}</div>
    <div><label>{{ __('Email')}}: </label> {{$user[0]->email}}</div>
</div>
<a href="{{ URL::previous() }}"><<</a>
</div>


@endsection