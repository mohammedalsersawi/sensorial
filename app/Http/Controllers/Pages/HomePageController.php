<?php

namespace App\Http\Controllers\Pages;

use App\Models\Cart;
use App\Models\Quiz;
use App\Models\grade;
use App\Models\Course;
use App\Models\Category;
use App\Models\Question;
use App\Models\biography;
use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
=======
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
>>>>>>> 97cbe830a300fb78ae319a199b1f7a09817304c9

class HomePageController extends Controller
{
    //
    public function show()
    {
        $courses = Course::latest('rate')->limit(10)->get();
        $categories = Category::latest('power')->limit(3)->get();
        $biography=biography::findOrFail(4);
        $biographyGroup=biography::limit(3)->get();
        $CountCourses = DB::table('courses')->count();
        $CountUsers = DB::table('users')->count();
        $CountCategories = DB::table('categories')->count();
        $comments = DB::table('comments')->count();
      //  $users = DB::table('users')->count();
        $arr=[$CountCourses,$CountUsers,$CountCategories,$comments];

 if(auth()->user()){
            $user = auth()->user()->id;
            $cart = Cart::where('user_id', '=', $user)->get();
            $count = Cart::where('user_id', $user)->count();
            return view('sensorial.pages.home.home', compact('courses','categories','cart','count','biography','biographyGroup','arr'));
        } else {
            return view('sensorial.pages.home.home', compact('courses', 'categories','biography','biographyGroup','arr'));
        }

    }

        // $cartCourses = DB::table('cart')
        // ->join('courses', 'cart.course_id', '=', 'courses.id')
        // ->where('cart.user_id', $user)
        // ->select('courses.*')
        // ->get();

    public function CategoriesShow(){
        $biography=biography::findOrFail(4);
        $biographyGroup=biography::limit(3)->get();
        $categories = Category::all();
        return view('sensorial.pages.home.categories', compact('categories','biography','biographyGroup'));


    }

    public function quize($id){
<<<<<<< HEAD
=======
        if(Cookie::get('text') !== null){
            return "dd" ;

        }
        $response = new \Illuminate\Http\Response('Test');
        $response->withCookie(cookie('test', 'test', 1));
>>>>>>> 97cbe830a300fb78ae319a199b1f7a09817304c9
        $quiz = Quiz::findOrFail($id);
        $qustion = Question::where('quiz_id' , $id)->get();
        $grade = grade::where('user_id' , Auth::id())->where('quiz_id' , $id)->exists();
        if($grade){
            return redirect()->back();
        }
        return view('sensorial.pages.quize.quize' , compact('quiz' , 'qustion' ));
   }

   public function resltquize(Request $request , $id ){
        $res = 0 ;
<<<<<<< HEAD
=======
return Cookie::get('test');
>>>>>>> 97cbe830a300fb78ae319a199b1f7a09817304c9
       $cquestion = Question::where('quiz_id' , $id)->count();
       $qcours = Question::where('quiz_id' , $id)->first();
       $question = Question::where('quiz_id' , $id)->pluck('answer');
       $grade = grade::where('user_id' , Auth::id())->where('quiz_id' , $id)->exists();
       if($grade){
           return redirect()->back();
       }
       $course = Course::findOrFail($qcours->quiz->course_id );
       for ($i = 0 ; $i < $cquestion ; $i++){
           if($request->$i == $question[$i]){
              $res++  ;
           }
       }

         grade::create([
             'user_id' => Auth::id(),
             'quiz_id' => $id ,
             'grade' => $res
         ]);





       return view('sensorial.pages.view.section' , compact('cquestion' , 'res' , 'course')) ;

    }
}
