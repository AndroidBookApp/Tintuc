<?php

use Illuminate\Support\Facades\Route;
use App\Mail\Sendmail;
use Illuminate\Support\Facades\Mail;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('non-static-layout.home');
});

Route::get('send-mail', function () {
    $details = [
        'title' => 'Thông Báo Về Tin Mới Trong UTE LIVE NEWS',
        'body' => 'Đã có thông báo mới trong bảng tin, xin mời bạn vào xem!!!'
    ];
    $mail_to = ["kiemluc01@gmail.com","nvthuan1201@gmail.com","nguyenquocvu10a2@gmail.com","Thanghoangminh149@gmail.com","buivietthinh.qng97@gmail.com","thanhhung14072001@gmail.com"];
    foreach($mail_to as $mail){
        Mail::to(strval($mail))->send(new Sendmail($details));
    }
     
    dd("Email is Sent.");
});