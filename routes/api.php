<?
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetitionController;
use App\Http\Controllers\AuthorController;

Route::middleware('auth:api')->get("/user", function(Request $request){
    return $request->user();
});

Route::apiResource("/api/petitions", PetitionController::class);

Route::resource("/api/authors", AuthorController::class)->only(["index", "show"]);