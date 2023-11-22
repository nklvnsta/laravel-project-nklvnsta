<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        // Проверяем, аутентифицирован ли пользователь
        if (Auth::check()) {
            $request->validate([
                'title' => 'required',
                'text' => 'required',
                'article_id' => 'required',
            ]);
    
            $comment = new Comment;
            $comment->title = $request->title;
            $comment->text = $request->text;
            $comment->author_id = Auth::id();
            $comment->article_id = $request->article_id;
            $comment->save();
    
            return redirect()->route('article.show', ['article' => $request->article_id]);
        } else {
            // Обработка случая, когда пользователь не аутентифицирован
            // Например, перенаправление на страницу входа
            return redirect()->route('login');
        }
    }
}