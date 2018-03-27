<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    /**
     * article 一覧ページを表示
     */
    public function index()
    {
        $articles = Article::all();

        return view('article.index', ['articles' => $articles]);
    }

    /**
     * article 作成ページを表示
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * article を作成し、作成完了ページを表示
     *
     * @param Request $request リクエスト
     */
    public function store(Request $request)
    {
        $article = new Article();
        $article->title = $request->title;
        $article->body = $request->body;
        $article->save();

        return view('article.store');
    }

    /**
     * article 編集画面を表示
     *
     * @param Request $request リクエスト
     * @param int $id ブログID
     */
    public function edit(Request $request, int $id)
    {
        $article = Article::find($id);
        return view('article.edit', ['article' => $article]);
    }

    /**
     * article を更新し、更新完了ページを表示
     *
     * @param Request $request リクエスト
     */
    public function update(Request $request)
    {
        $article = Article::find($request->id);
        $article->title = $request->title;
        $article->body = $request->body;
        $article->save();

        return view('article.update');
    }

    /**
     * @param Request $request
     * @param         $id
     *
     * @return mixed
     */
    public function show(Request $request, $id) {
        $article = Article::find($id);
        return view('article.show', ['article' => $article]);
    }

    /**
     * @param Request $request
     *
     * @return mixed
     */
    public function delete(Request $request) {
        Article::destroy($request->id);
        return view('article.delete');
    }
}
