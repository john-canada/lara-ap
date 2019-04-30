<?php

namespace App\Http\Controllers;
use App\Http\Controllers\DateTime;
use Illuminate\Http\Request;
use App\Http\Controllers\validate;
use App\Events\buyItems as buyItemCreated;
use App\Customer;
use Session;
class formController extends Controller
{
 
    public function index(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'food'=>'required',
        ]);
        
        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'food'=>$request->food,
            'coupon'=>$request->coupon,
        ];

        Session::forget('data');
        Session::forget('ty');
        Session::forget('age');
        
        if(!Session::has('data')){
            Session()->put('data', $data);
        }

        if($data['coupon']=="Ken"){
            $customer = new Customer();
            $customer->name=$request->input('name');
            $customer->email=$request->input('email');
            $customer->food=$request->input('food');
            $customer->coupon=$request->input('coupon');
            $customer->age=$request->input('age');
            $customer->save();

            $thank="Thank you for using the coupon";
            if(!Session::has('ty')){
                Session()->put('ty', $thank);
            }
            event(new buyItemCreated($customer));
            return view('pages.thank')->with('thank',$thank);
        };

        return view('pages.term');
    }

    public function create(Request $request)
    {
      
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'month'=>'required',
            'date'=>'required',
            'year'=>'required',
            'checkbox'=>'min:1',
        ]);

            $checkbox=$request->checkbox;
            $month = $request->month;
            $year = $request->year;
            $date = $request->date;
            // dd($checkbox);
            $bd="$year-$month-$date 00:00:00.0";
            $bd = new \DateTime($bd);
            $diff=date_diff($bd,now());
            $diff_days = $diff->format("%y");
            
            if(($diff_days < 18) || $checkbox==NULL){
                $age=$diff_days;
                return view('pages.entry');
                      }else{
                  $age=$diff_days;
                  Session::put('age',$age);
                  if(Session::has('data')){
                    $data = Session::get('data');                
                    $customer = new Customer();
                    $customer->name=$data['name'];
                    $customer->email=$data['email'];
                    $customer->food=$data['food'];
                    $customer->coupon='';
                    $customer->age=$age;
                    $customer->save();
                  event(new buyItemCreated($customer));
                return view('pages.thank')->with('age',$age);
             }    
           }
          
       
        }

    public function show($id)
    {
        //
    }
    
    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
