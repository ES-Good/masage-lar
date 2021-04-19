<?php

namespace App\Http\Controllers\API;

use App\Exports\OrdersExport;
use App\Http\Controllers\Controller;
use App\Http\Filters\OrderFilter;
use App\Mail\SendMail;
use App\Mail\SendMailQuiz;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;

class OrderController extends Controller
{
    public function index(Request $request, OrderFilter $filter){
        $orders = Order::filter($filter)->orderByDesc('created_at')->get();

        return response()->json($orders);
    }
    public function export(Request $request)
    {

        //dd(Carbon::parse($request['date'][0])->toDateString());
        return Excel::download(new OrdersExport($request), Carbon::now().'leads.xlsx');
        //return (new OrdersExport)->download('orders.xlsx');
    }

    public function store(Request $request){

        $this->validate($request,[
            'name' => 'required|min:3',
            'phone' => 'required|regex:/^\d(\d{3})(\d{3})(\d{4})$/',
            'summa' => 'required|integer',
            'checkbox' => 'required|in:1'
        ]);
        $name = $request->input('name');
        $phone = $request->input('phone');
        $summa = $request->input('summa');
        $city = $request->input('city');

        $this->createOrder($name,$phone,$summa,$city);
        Mail::to(env('MAIL_TO_ADDRESS'))->send(new SendMail($name,$phone,$city,$summa));
        return  response()->json($request->all(),200);
    }

    public function quizStore(Request $request){

        $this->validate($request,[
            'phone' => 'required|regex:/^\d(\d{3})(\d{3})(\d{4})$/',
        ]);

        $phone = $request->input('phone');
        $data = $request->input('data');
        $name = $request->input('name');
        $city = $request->input('city');

        $this->createOrder($name,$phone,$data[1]['answer'],$city);


        Mail::to(env('MAIL_TO_ADDRESS'))->send(new SendMailQuiz($name,$data,$phone, $city));
       // $this->addNewLeadSpecialCRM($request ,'Новый клиент',$phone,'','');
        return  response()->json($request->all(),200);
    }

    public function createOrder($name,$phone,$summa,$city){
        $order = new Order();
        $order->createOrder($name,$phone,$summa,$city);
    }

    public function addNewLeadSpecialCRM(Request $request,$name, $phone, $comment, $utm)
    {
        $data['name'] = $name;
        $data['phone'] = $phone;
        $data['domain'] = $request->server->get('HTTP_HOST');
        $data['org'] = 4;
        $data['subject'] = '';
        $data['mail'] = '';
        $data['ip'] = $request->ip();
        $data['comment'] = $comment.' Л-Корпорация Москва — выдача кредита';

        $data['utm_source'] = !empty($utm['utm_source']) ? $utm['utm_source'] : '';
        $data['utm_campaign'] = !empty($utm['utm_campaign']) ? $utm['utm_campaign'] : '';
        $data['utm_medium'] = !empty($utm['utm_medium']) ? $utm['utm_medium'] : '';
        $data['utm_term'] = !empty($utm['utm_term']) ? $utm['utm_term'] : '';
        $data['utm_content'] = !empty($utm['utm_content']) ? $utm['utm_content'] : '';

        $data['ClientId_metrika'] = !empty($utm['ClientId_metrika']) ? $utm['ClientId_metrika'] : '';
        $data['ClientId_analytics'] = !empty($utm['ClientId_analytics']) ? $utm['ClientId_analytics'] : '';

        if( $curl = curl_init()) {
            curl_setopt($curl, CURLOPT_URL, 'https://crm-control.info/import/sites?token=asdfh234jaslkLJI234)234u2jemdlk==ads12!8322438oretpimv');
            curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

            $res = curl_exec($curl);
            Log::info($res);
            /* if(!$res) {
                return curl_error($curl).'('.curl_errno($curl).')';
            } */
            curl_close($curl);

        }
    }
}
