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
    use App\Http\Controllers\Api\UserController;
    use App\Http\Controllers\Api\PasswordresetController; // Added missing import
    use App\Http\Controllers\Auth\ResetPasswordController;

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

    Route::apiResource('passwordreset', PasswordresetController::class); // Uncommented the line
    // Route::apiResource('user', UserController::class);
    // Route ini digunakan untuk mengirimkan tautan reset password ke email pengguna
    Route::post('forgot-password', [PasswordresetController::class, 'forgotPassword']);
    
    // Route ini digunakan untuk mereset password pengguna dengan token yang valid
    Route::post('reset-password', [PasswordresetController::class, 'resetPassword']);


    Route::post('/reset-password', [ResetPasswordController::class, 'reset']);
