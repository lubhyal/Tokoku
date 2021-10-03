<?php

namespace App\Http\Controllers;
use App\Order;
use App\User;
use App\Profile;
use App\Reminder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class AdminController extends Controller
{
    public function index()
    {
        $totalgross = 0;

        $users = User:: get();
        $totaluser = count($users);

        $orders = Order::get();
        $totalorder = count($orders);
     
        
        
        if(Reminder::find(1)==null)
        {
            $reminder=new Reminder();
            $reminder->id = 1;
            $reminder->reminder="Tulis sesuatu...";
            $reminder->save();
            $reminder = Reminder::find(1);
        }
        else
        {
            $reminder = Reminder::find(1);
        }
        
        $gross = Order::get();
        $gross->transform(function($order,$key){
            $order->cart = unserialize($order->cart);
            return $order;
        });

        foreach ($gross as $x){
           $totalgross+= $x->cart->totalPrice;
        }


        $latest=Order::orderBy('created_at','DESC')->take(5)->get();
        
        return view('admin.index',compact('latest','totaluser','totalorder','totalgross','reminder'));
    }

    public function order()
    {
        $orders=Order::orderBy('created_at','DESC')->get();
        
        return view('admin.order',compact('orders'));
    }

    public function show_order($id)
    {
        $ids =DB::table('orders')->where('id',$id)->get();

        $order =DB::table('orders')->where('id',$id)->get();
        $order->transform(function($order,$key){
            $order->cart = unserialize($order->cart);
            return $order;
        });
        return view('admin.showorder',compact('order','ids'));
    }

    public function sendEmail(Request $request)
    {
        $to         = $request->get('to');
        $subject    = $request->get('subject');
        $message    = $request->get('message');
 
        $mail = new PHPMailer(true);
 
        try {
            $mail->SMTPDebug = 0; 
            $mail->isSMTP();
            $mail->Host       = 'smtp.googlemail.com';   
            $mail->SMTPAuth   = true;
            $mail->Username   = 'tokokugan@gmail.com'; 
            $mail->Password   = 'admintokoku1A'; 
            $mail->SMTPSecure = 'ssl';
            $mail->Port       = 465;

            $mail->setFrom('tokokugan@gmail.com', 'TOKOKU.com'); 
            $mail->addAddress($to);
            $mail->addReplyTo('tokokugan@gmail.com', 'TOKOKU.com'); 
            // Content
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $message;

            $mail->send();
            $request->session()->flash('status', 'Email berhasil dikirim!');
            return redirect()->route('admin.order');
        } catch (Exception $e) {
            $request->session()->flash('status', "Gagal kirim email");
            return redirect()->route('admin.order');
        }
    }

    public function user()
    {
        $users=DB::table('users')->leftjoin('profiles','users.id','=','profiles.user_id')->get();
        return view('admin.user',compact('users'));
    }

    public function updatereminder()
    {
        $reminder= Reminder::find(1);
        $reminder->reminder = request('reminder');
        $reminder->save();

        return redirect()->route('admin.index')->with('success','Berhasil memperbarui pengingat.');
    }
}