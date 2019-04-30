@extends('layouts.app')
@section('page-content')
<section>
    <div class="container">
       <div class="row">
           <div class="col-md-6 offset-md-3 mt-5">
               <h2>{{__('You birthday')}}</h2>

                {{-- @if($data = Session::has('data')? Session::get('data'):'')
                  @foreach($data as $da) 
                     <p> {{$da}} </p>
                  @endforeach  
                  {{ Session::forget('data') }}
                @endif
              --}}
                <form action="{{route('checkout')}}" method="post">
                    @csrf()
                    <div class="form-group" style="width:25%">
                        <label for="month">Month</label>
                        <select class="form-control" name="month" id="month">
                          <option value="01">Jan</option>
                          <option value="02">Feb</option>
                          <option value="03">March</option>
                          <option value="04">April</option>
                          <option value="05">May</option>
                          <option value="06">Jun</option>
                          <option value="07">July</option>
                          <option value="08">August</option>
                          <option value="09">September</option>
                          <option value="10">October</option>
                          <option value="11">November</option>
                          <option value="12">December</option>
                        </select>
                      </div>

                      <div class="form-group" style="width:25%">
                            <label for="month">Date</label>
                        <select class="form-control" name="date" id="date">
                          <option value="01">1</option>
                          <option value="02">2</option>
                          <option value="03">3</option>
                          <option value="04">4</option>
                          <option value="05">5</option>
                          <option value="06">6</option>
                          <option value="07">7</option>
                          <option value="08">8</option>
                          <option value="09">9</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                          <option value="13">13</option>
                          <option value="14">14</option>
                          <option value="15">15</option>
                          <option value="16">16</option>
                          <option value="17">17</option>
                          <option value="18">18</option>
                          <option value="19">19</option>
                          <option value="20">20</option>
                          <option value="21">21</option>
                          <option value="22">22</option>
                          <option value="23">23</option>
                          <option value="24">24</option>
                          <option value="25">25</option>
                          <option value="26">26</option>
                          <option value="27">27</option>
                          <option value="28">28</option>
                          <option value="29">29</option>
                          <option value="30">30</option>
                          <option value="31">31</option>
                        </select>
                      </div>

                      <div class="form-group" style="width:25%">
                       <label for="month">Year</label>
                        <select class="form-control" name="year" id="year">
                          <option value="2019">2019</option>
                          <option value="2018">2018</option>
                          <option value="2017">2017</option>
                          <option value="2016">2016</option>
                          <option value="2015">2015</option>
                          <option value="2014">2014</option>
                          <option value="2013">2013</option>
                          <option value="2012">2012</option>
                          <option value="2011">2011</option>
                          <option value="2010">2010</option>
                          <option value="2009">2009</option>
                          <option value="2008">2008</option>
                          <option value="2007">2007</option>
                          <option value="2006">2006</option>
                          <option value="2005">2005</option>
                          <option value="2004">2004</option>
                          <option value="2003">2003</option>
                          <option value="2002">2002</option>
                          <option value="2001">2001</option>
                          <option value="2000">2000</option>
                        </select>
                      </div>

                      <div class="form">
                            <input class="form-controll mb-10" type="checkbox" name="checkbox" value="1" id="checkbox">
                            <label class="form-check-label" for="checkbox">
                              Agree terms
                            </label>
                         </div>

                  <button class="btn btn-primary btn-pull mt-5">Submit</button>
                </form>
            </div>
        </div>
    </div>    
</section>    
@endsection