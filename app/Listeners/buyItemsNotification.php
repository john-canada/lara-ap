<?php
Use Mail;
use Session;
namespace App\Listeners;
use App\Events\buyItems;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class buyItemsNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function handle(buyItems $event)
    {

        $data = array(
            'name'=>$event->customer->name,
            'email'=>$event->customer->email,
            'food'=>$event->customer->food,
            'coupon'=>$event->customer->coupon,
            'age'=>$event->customer->age,
        );

          \Mail::send('mails.sendmail', $data , function($message)use($data){
           $message->to($data['email'])
                   ->subject('Welcome to our site');
           $message->from('canadajun1972@gmail.com');
        });
    }
}
