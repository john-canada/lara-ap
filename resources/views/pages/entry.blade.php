@extends('layouts.app')
@section('page-content')
<section>
    <div class="container">
       <div class="row">
           <div class="col-md-6 offset-md-3 mt-5">
               <h2>{{__('Check out')}}</h2>
                <form method="post" action="{{url('/term')}}">
                    @csrf()
                        <div class="form-group mt-5">
                        {{-- <label for="name">Name</label> --}}
                        <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
                        </div>
                        
                        <div class="form-group">
                            {{-- <label for="email">email</label> --}}
                            <input type="email" class="form-control" name="email" placeholder="Enter your email address" required>
                        </div>
                    
                    <div class="form-group">
                        {{-- <label for="food">Favorate food</label> --}}
                        <input type="text" class="form-control" name="food" placeholder="Enter your favorate food" required>
                    </div>
                    
                    <div class="form-group">
                            {{-- <label for="coupon">Coupon</label> --}}
                            <input type="text" class="form-control" name="coupon" placeholder="Enter coupon ">
                    </div>
                  <button class="btn btn-primary btn-pull">Submit</button>
                </form>
            </div>
        </div>
    </div>    
</section>    
@endsection