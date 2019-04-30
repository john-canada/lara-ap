<h1>Thank you</h1>

<h4>Product purchased</h4>
 @if($data = Session::has('data')? Session::get('data'):'')
  <p>Name :{{$data['name']}}</p>
  <p>Email :{{$data['email']}}</p>
  <p>Favorite food:{{$data['food']}}</p>
  @if($ty = Session::has('ty')? Session::get('ty'):'')
   <p>{{$ty}}</p>
  @endif

  @if($age = Session::has('age')? Session::get('age'):'')
   <p>Age :{{$age}}</p>    
  @endif
  
 @endif

