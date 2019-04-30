@extends('layouts.app')
@section('page-content')
  <div class="container">
        <h1 class="mt-5">Thank you</h1>

        @if($data=Session::has('data')? Session::get('data'):'')
            {{-- @foreach($data as $datum) --}}
            <h4 class="mt-5">Name :{{$data['name']}}</h4>
            <h4>Email :{{$data['email']}}</h4>
            <h4>Favorate food :{{$data['food']}}</h4>
          {{-- //  @endforeach --}}
         @endif
         @if(isset($age))
           <h4>Your age :{{$age}} years old</h4>
         @endif
         
         @if(isset($thank))
        <h2> {{$thank}}</h2>
      @endif
  </div>         
@endsection