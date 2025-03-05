<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Article;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function homepage(){
        $article1=Article::find(18);
        $article2=Article::find(19);
        $article3=Article::find(20);
        $article4=Article::find(21);
        return view('welcome', ['article1' => $article1, 'article2' => $article2, 'article3' => $article3, 'article4' => $article4]);
    }

    public function articles(){
        return view('articles', ['articleList' => $this->articles]);
    }

    public function article($id){
        foreach ($this->articles as $article) {
            if ($article['id'] == $id){
                return view ('article', ['article' => $article]);
            }
        }
    }

    public function contacts(){
        return view('contacts', ['articleList' => $this->articles]);
    }

    public function contactRequestSubmit(Request $request){
        $name = $request->name;
        $email = $request->email;
        $user_msg = $request->user_msg;
        $user_data = compact('name', 'email', 'user_msg');
        try{
            Mail::to($email)->send(new ContactMail($user_data));
        }catch(Exception $error){
            return redirect(route('contact-request-result'))->with('emailError', 'Richiesta fallita. Riprova più tardi.');
        }
        return redirect(route('contact-request-result'))->with('status', 'Richiesta inviata correttamente. Controlla la tua email.');
    }

    public function contactRequestResult(){
        return view('contact-request-result');
    }

    public function socialRedirect($social){
        switch ($social) {
            case 'facebook':
                return redirect('https://www.facebook.com/prod.djt');
                break;
            case 'instagram':
                return redirect('https://www.instagram.com/prod.djt/');
                break;
            case 'linkedin':
                return redirect('https://www.linkedin.com/in/giovanni-tramontano-developer');
                break;
            case 'email':
                return redirect('https://mailto:giovanni.tramontano.gt@gmail.com');
                break;
            default:
                return redirect(route('homepage'));
                break;
        }
    }
}