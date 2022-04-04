@extends('layouts.app')

@section('content')

                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <ul>
                        <li> <a href="{{url('panel/subscriptions?active=1')}}">{{ __('List_active_subscriptions') }}</a> </li>
                        <li><a href="{{url('panel/subscriptions?active=0')}}">{{ __('List_disabled_subscriptions') }}</a></li>
                    </ul>
                    
                    
                
</div>
@endsection
