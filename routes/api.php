        <?php

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\Api\RegisterController;
    use App\Http\Controllers\Api\LoginController;   
    use App\Http\Controllers\Api\OrderController;
    use App\Http\Controllers\Api\CostumerOrderController;
    use App\Http\Controllers\Api\DriverMenerimaOrderController;
    use App\Http\Controllers\Api\DriverPickupController;
    use App\Http\Controllers\Api\DriverSampaiTujuanController;
    use App\Http\Controllers\Api\CostumermelakukanratingController;
    use App\Http\Controllers\Api\HistoryOrderController;
    use App\Http\Controllers\API\Auth\PasswordresetController; // Corrected namespace
    use App\Http\Controllers\Api\UserController;

    Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
        return $request->user();
    });

    Route::apiResource('register', RegisterController::class); 
    Route::apiResource('order', OrderController::class);
    Route::apiResource('costumerorder', CostumerOrderController::class);
    Route::apiResource('login', LoginController::class);
    Route::apiResource('drivermenerimaorder', DriverMenerimaOrderController::class);
    Route::apiResource('driverpickup', DriverPickupController::class);
    Route::apiResource('driversampaitujuan', DriverSampaiTujuanController::class);
    Route::apiResource('costumermelakukanrating', CostumermelakukanratingController::class);
    Route::apiResource('historyorder', HistoryOrderController::class);

    Route::apiResource('user', UserController::class);
    Route::apiResource('passwordreset', PasswordresetController::class);
