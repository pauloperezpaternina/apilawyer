<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">{{__('Email')}}</th>
        <th scope="col">{{__('Active')}}</th>
        <th> {{ __('Actions')}} </th>
      </tr>
    </thead>
    <tbody>
        @foreach($subscriptions as $subscription)
            <tr>
            
                <th scope="row">{{$subscription->id}}</th>
                <td>{{$subscription->email}}</td>
                <td>{{$subscription->active}}</td>
                <th> <a href="">{{ __('Show')}}</a> </th>
             </tr>
        @endforeach

    </tbody>
  </table>


{{$subscriptions->links()}}
