<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\HelloMail;
use App\Models\Project;
use App\Models\Resume;
use App\Models\Skill;
use App\Http\Controllers\Str;
use Carbon\Carbon;
use Illuminate\Support\Carbon as SupportCarbon;
use Illuminate\Support\Facades\DB;

class StaticController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        $resumes = Resume::all();
        $skills = Skill::all();

        return view('pages.index', compact('projects','resumes', 'skills'));
    }

    public function login()
    {
        return view('auth.login');
    }
    public function register()
    {
        return view('auth.register');
    }
    public function reset()
    {
        return view('auth.verify');
    }
    public function resetPost(Request $request)
    {
        $request->validate([
            'email'=>"required|email|exists:users,email"
        ]);

        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email'=> $request->email,
            'token'=>$token,
            'created_at'=> Carbon::now()
        ]);

        Mail::send(new HelloMail($request));

    }
    public function dashboard()
    {
        $projects = Project::all();
        $resumes = Resume::all();
        $skills = Skill::all();

        return view('pages.home', compact('projects','resumes', 'skills'));
    }

    public function contact_mail_send(Request $request){
        $validate = $request->validate([
            'email' => ['required'],
            'name' => ['required'],
            'tel' => ['required'],
            'message' => ['required']

        ]);
        if($validate){
            $resultat = Mail::to('errakibianas8@gmail.com')->send(new HelloMail($request));
        if ($resultat) {
            return redirect()->route('home.index')->with('success', "L'email est envoyer avec succès");
    
        }else{
            return back()->withInput()->withErrors([
            'error' => 'Quelques chose qui cava pas!!!.',
        ]);
        }
        }
    }
}