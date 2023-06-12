<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\DeliverysController;
use App\Http\Controllers\DeleveredController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\LoginsController;
use App\Http\Controllers\User;
use App\Http\Controllers\Sales;
use App\Http\Controllers\Address;
use App\Http\Controllers\ProductControler;
use App\Http\Controllers\DailySales;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CashiersController;
use App\Http\Controllers\CostumerController;
use App\Http\Controllers\Costumer1Controller;
use App\Http\Controllers\Costumer2Controller;
use App\Http\Controllers\EmployAccount;
use App\Http\Controllers\DeliveryboyAccount;
use App\Http\Controllers\CashierAccount;
use App\Http\Controllers\YearlySales;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\FiredController;

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
    return view('welcome');
});

Route::get('/user', function () {
    return view('user.user');
});
Route::get('/index', function () {
    return view('user.index');
});

Route::get('/indexss', function () {
    return view('employee.indexss');
});

Route::post('/index', [LoginsController:: class, 'index']);

Route::post('/db', [Address:: class, 'dbCheck']);
Route::post('/paidandcancel', [Address:: class, 'dbCheck1']);
Auth::routes();
Route::get('/dash', [DeliverysController::class, 'dash'])->name('dash');

Route::get('/milkteas', [HomeController::class, 'milkteas']);
Route::get('/abouts', [HomeController::class, 'abouts']);

Route::resource('month', Address::class);
Route::get('/month', [Address:: class, 'month']);
Route::post('/monthly ',[ Address::class, 'monthly']);


Route::get('/create1/{id} ',[ EmployeesController::class, 'show1']);
Route::get('/create1/{id}/edit', [EmployeesController:: class, 'employee.create1']);
Route::put('/create1/{id}',[ EmployeesController::class, 'update1']);

Route::resource('employees', HomeController::class);
Route::get('/employees/{id} ',[ EmployeesController::class, 'show']);
Route::get('/employees/{id}/edit ',[ EmployeesController::class, 'employee.profile']);
Route::post('/employees/{id}',[ EmployeesController::class, 'update']);
Route::delete('/employees/{id}',[ EmployeesController::class, 'destroy']);
Route::get('/addemployee', [EmployeesController:: class, 'create']);
Route::post('/employee', [EmployeesController:: class, 'store']);
Route::get('/DelboyHome', function () {
    return view('delivery.home');
});

Route::get('/tasking/{id} ',[ TasksController::class, 'show2']);
Route::get('/tasking/{id}/edit ',[ TasksController::class, 'task.update2']);
Route::post('/tasking/{id}',[ TasksController::class, 'update2']);


Route::resource('employaccount', EmployAccount::class);
Route::get('/employaccount/{id}/edit ',[EmployAccount::class, 'employee.employaccount']);
Route::put('/employaccount/{id}',[ EmployAccount::class, 'update']);
Route::get('/employaccount/{id} ',[ EmployAccount::class, 'show']);
Route::get('/successupdate ',[ EmployAccount::class, 'successupdate']);


Route::resource('deliveries', DeliverysController::class);
Route::resource('delivered', DeliverysController::class);

Route::get('/deliveries/{id} ',[ DeliverysController::class, 'show']);
Route::get('/deliveries/{id}/edit ',[ DeliverysController::class, 'delivery.delboyupdate']);
Route::put('/deliveries/{id}',[ DeliverysController::class, 'update']);
Route::delete('/deliveries/{id}',[ DeliverysController::class, 'destroy']);
Route::get('/delboyordering', [DeliverysController:: class, 'create']);
Route::post('/delivery', [DeliverysController:: class, 'store']);

Route::resource('tasks', TasksController::class);

Route::get('/taskcreate', [TasksController:: class, 'create']);
Route::post('/task', [TasksController:: class, 'store']);
Route::get('/cashiertask', [TasksController:: class, 'cashiertask']);
Route::get('/employeetask', [TasksController:: class, 'employeetask']) ;

Route::resource('delivery', DeleveredController::class);
Route::get('/delivery/{id} ',[ DeleveredController::class, 'show']);
Route::get('/delivery/{id}/edit ',[ DeleveredController::class, 'delivery.delboypaid']);
Route::put('/delivery/{id}',[ DeleveredController::class, 'update']);
Route::get('/delboyordering', [DeliverysController:: class, 'create']);
Route::post('/delivery', [DeliverysController:: class, 'store']);

Route::resource('deliveryboyaccount', DeliveryboyAccount::class);
Route::get('/deliveryboyaccount/{id}/edit ',[DeliveryboyAccount::class, 'delivery.deliveryboyaccount']);
Route::put('/deliveryboyaccount/{id}',[ DeliveryboyAccount::class, 'update']);
Route::get('/deliveryboyaccount/{id} ',[ DeliveryboyAccount::class, 'show']);
Route::get('/successupdate ',[ DeliveryboyAccount::class, 'successupdate']);

Route::post('/hulo', [Address:: class, 'hulo']);
Route::get('/pag-asa', [Address:: class, 'pagasa']);

Route::resource('product', ProductControler::class);

Route::resource('daily', DailySales::class);
Route::get('/totaldailys', [DailySales:: class, 'Total']);
Route::resource('year', YearlySales::class);
Route::get('/totalyearlys', [YearlySales:: class, 'Total']);

Auth::routes();
Route::resource('users', HomeController::class);
Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::post('/home', [HomeController::class, 'home'])->name('home');

Route::get('/homepage', [HomeController::class, 'homepage'])->name('homepage');
Route::post('/homepage1', [HomeController::class, 'homepage1'])->name('homepage1');
Route::post('/verified', [HomeController::class, 'verified'])->name('verified');

Route::get('/users/{id}/edit ',[ HomeController::class, 'employee.profile']);
Route::put('/users/{id}',[ HomeController::class, 'update']);
Route::get('/users/{id} ',[ HomeController::class, 'show']);
Route::get('/transaction', [HomeController::class, 'employeetransac']);
Route::get('/users/{id}/y ',[ HomeController::class, 'show2']);
Route::get('/users/{id}/y/edit', [HomeController:: class, 'employee.profile1']);
Route::put('/users/{id}/y',[ HomeController::class, 'update2']);

Route::get('/db', [HomeController::class, 'delb'])->name('db'); 
Route::get('/verified', [HomeController::class, 'verified'])->name('verified'); 

Route::resource('cashier', CashiersController::class);
Route::get('/cashier/{id} ',[ CashiersController::class, 'show']);
Route::get('/cashier/{id}/edit ',[CashiersController::class, 'cashier.cashierupdate']);
Route::put('/cashier/{id}',[ CashiersController::class, 'update']);
Route::get('/cashierordering', [CashiersController:: class, 'create']);
Route::post('/cashier', [CashiersController:: class, 'store']);

Route::resource('cashieraccount', CashierAccount::class);
Route::get('/cashieraccount/{id}/edit ',[ CashierAccount::class, 'cashier.cashieraccount']);
Route::put('/cashieraccount/{id}',[  CashierAccount::class, 'update']);
Route::get('/cashieraccount/{id} ',[  CashierAccount::class, 'show']);
Route::get('/successupdate ',[  CashierAccount::class, 'successupdate']);

Route::get('/cashierordering1', [CashiersController:: class, 'create1']);

Route::resource('costumer', CostumerController::class);

Route::get('/costumer/{id} ',[ CostumerController::class, 'show']);
Route::get('/costumer/{id}/edit ',[CostumerController::class, 'costumer.costumerupdate']);
Route::put('/costumer/{id}',[ CostumerController::class, 'update']);
Route::get('/costumerordering', [CostumerController:: class, 'create']);
Route::post('/costumerorder', [CostumerController:: class, 'store']);

Route::resource('costumeraccount', Costumer1Controller::class);
Route::get('/costumeraccount/{id}/edit ',[Costumer1Controller::class, 'costumer.costumeraccount']);
Route::put('/costumeraccount/{id}',[ Costumer1Controller::class, 'update']);
Route::get('/costumeraccount/{id} ',[ Costumer1Controller::class, 'show']);
Route::get('/successupdate ',[ Costumer1Controller::class, 'successupdate']);

Route::get('/milkteaproduct', [CostumerController:: class, 'milkteaproduct']);
Route::get('/milktea1', [CostumerController:: class, 'milktea1']);
Route::get('/milktea2', [CostumerController:: class, 'milktea2']);
Route::get('/milktea3', [CostumerController:: class, 'milktea3']);
Route::get('/milktea4', [CostumerController:: class, 'milktea4']);
Route::get('/milktea5', [CostumerController:: class, 'milktea5']);
Route::get('/milktea6', [CostumerController:: class, 'milktea6']);
Route::get('/about', [CostumerController:: class, 'about']);

Route::get('chart', [ChartController::class, 'chart']);

Route::resource('costumerall', Costumer2Controller::class);
Route::get('/costumerpaidcancel', [Costumer2Controller:: class, 'costumerpaidorder']);

Route::get('/products', [ChartController:: class, 'milktea']);
Route::get('/abouts', [ChartController:: class, 'abouts']);
Route::get('/milkteas1', [ChartController:: class, 'milktea1']);
Route::get('/milkteas2', [ChartController:: class, 'milktea2']);
Route::get('/milkteas3', [ChartController:: class, 'milktea3']);
Route::get('/milkteas4', [ChartController:: class, 'milktea4']);
Route::get('/milkteas5', [ChartController:: class, 'milktea5']);
Route::get('/milkteas6', [ChartController:: class, 'milktea6']);

