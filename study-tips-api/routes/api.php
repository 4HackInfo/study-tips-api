use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/tip', function () {
    $studyTips = [
        "Review your notes within 24 hours to improve retention.",
        "Take a 5-minute break every 30 minutes of studying.",
        "Use flashcards for faster recall.",
        "Teach someone else to understand better.",
        "Stay hydrated while studying."
    ];

    return response()->json([
        'tip' => $studyTips[array_rand($studyTips)]
    ]);
});
