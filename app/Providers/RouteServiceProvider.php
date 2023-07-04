<?php

namespace App\Providers;

use App\Models\Attendance;
use App\Models\AttendanceStudent;
use App\Models\Batch;
use App\Models\Course;
use App\Models\FeeReceipt;
use App\Models\FeeReceiptVoucher;
use App\Models\Holiday;
use App\Models\Instructor;
use App\Models\PendingStudent;
use App\Models\SaleInvoice;
use App\Models\Student;
use App\Models\Voucher;
use App\Models\VoucherLedger;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    // protected $namespace = 'App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->name('api.')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));
                Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/jkweb.php'));
        });

        Route::model('student',Student::class);
        Route::model('pending_student',PendingStudent::class);
        Route::model('fee',FeeReceiptVoucher::class);
        Route::model('course',Course::class);
        Route::model('batch',Batch::class);
        Route::model('instructor',Instructor::class);
        Route::model('attendance',Attendance::class);
        Route::model('invoice',SaleInvoice::class);
        Route::model('voucher',Voucher::class);
        Route::model('ledger',VoucherLedger::class);
        Route::model('attendance_student',AttendanceStudent::class);
        Route::model('holiday',Holiday::class);


    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}
