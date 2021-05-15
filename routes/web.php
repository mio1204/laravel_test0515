<?php

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

// Route::get('/', [PersonController::class, 'index']);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;

Route::get('/session', [SessionController::class, 'ses_get']);
Route::post('/session', [SessionController::class, 'ses_put']);

// Laravelは①PHP のフレームワークの一つです。
// MVCのMは②Model でアプリケーションの扱うデータと業務処理を指します。
// Vは③View でユーザーへの出力を指します。
// Cは④Controller で必要な処理を②や③に伝える役割を担います。
// ⑤view とはクライアントがサーバーにして欲しいことを依頼するための手段です。
// ⑤にはリクエストの種類に応じて、⑥create、⑦read、⑧update、DELETEに分かれます。
// ⑨relation とは、クライアントのリクエスト内容とサーバーの処理をひもづける作業を指します。
// Webページの具体的な処理は④を使って行います。
// Laravelでは主に、⑩blade と呼ばれるテンプレートエンジンを利用してレンダリングを行います。

Route::get('/building', function () {
    return "建物です";
});
Route::get('/building/{room}', function ($room) {
    return "部屋番号は" . $room . "です";
});
