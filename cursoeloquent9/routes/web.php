<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/update', function (Request $request) {

    if (!$post = Post::find(1))
        return 'Post not Found';

//    $post->title = 'Titulo atualizado';
//    $post->save();
    $post->update($request->all());

    dd(Post::find(1));
});

Route::get('/orderby', function () {
    $users = User::orderBy('id', 'DESC')->get();

    return $users;
});

Route::get('/pagination', function (User $user) {
    $filter = request('filter');
    $paginate = request('paginate', 10);

    $users = $user->where('name', 'LIKE', "%{$filter}%")->paginate($paginate);
    // http://localhost:8000/pagination?page=2&filter=a&paginate=50
    return $users;
});

Route::get('/where', function (User $user) {
    //$user = $user->where('email', '=', 'zgoodwin@example.org')->first();
    // $user = $user->where('email', 'zgoodwin@example.org')->first(); // resultado é o mesmo do acima

    $filter = 'jose';
    // $users = $user->where('name', 'LIKE', "%$filter%")->get();
    // $users = $user->where('name', 'LIKE', "%$filter%")->orWhere('name', 'Barrett Sipes')->get();
    // ->toSql(); select * from `users` where `name` LIKE ? or `name` = ?

    $users = $user->where('name', 'LIKE', "%{$filter}%")
        ->orWhere(function ($query) use ($filter) {
            $query->where('name', '<>', 'Jose');
            $query->where('name', '=', $filter);
        })
        ->toSql();
    // select * from `users` where `name` LIKE ? or (`name` <> ? and `name` = ?)

    dd($users);
});

Route::get('/select', function () {
    //$users = User::all();
    // $users = User::where('id', '>=', 10)->get();
    // $user = User::where('id', 10)->first();
    // $user = User::first();
    // $user = User::find(10);

    //$user = User::findOrFail(request('id')); // comum em uso em API
    // $user = User::where('name', request('name'))->firstOrFail(); // comum em uso em API
    // $user = User::firstWhere('name', request('name')); // comum em uso em API
    //dd($user);
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/insert', function (Post $post) {
    // FORMA MANUAL
    $post->user_id = 1;
    $post->title = 'Post ' . Str::random(10);
    $post->body = 'COnteudo do post teste';
    $post->date = date('Y-m-d');
    $post->save();

    $posts = Post::get();
    return $posts;
});
/*
Route::get('/insert2', function (Post $post) {
 // MODEL POST: protected $fillable = ['user_id', 'title', 'body', 'date'];
    $post = Post::create([
        'user_id' => '1',
        'title' => 'Post ' . \Illuminate\Support\Str::random(10),
        'body' => 'COnteudo do post teste',
        'date' =>date('Y-m-d'),
    ]);

    return $post;
})
*/

Route::get('/insert2', function (Post $post, Request $request) {
    /* MODEL POST: protected $fillable = ['user_id', 'title', 'body', 'date']; */
    $post = Post::create($request->all());

    return $post;
});

Route::get('/delete', function () {

    // Post::destroy([1,2]);
    // Post::destroy(1,2,3);
    // Post::destroy(Post::get();

    $post = Post::where('id', 7)->first();

    if (!$post) {
        return 'POST NOT FOUND';
    }
    dd($post->delete());

});

Route::get('/delete2', function () {

    Post::destroy(5);

    $posts = Post::get();

    return $posts;

});

Route::get('/acessor', function () {

    $post = Post::first();
    return $post;

});

Route::get('/mutators', function () {
    $user = User::first();
    $post = Post::create([
        'user_id' => $user->id,
        'title' => 'Um novo titulo ' . Str::random(10),
        'body' => Str::random(100),
        'date' => now(),

    ]);
    return $post;
});

Route::get('/local-scope', function () {

    // $post = Post::LastWeek()->get();
    // $post = Post::Today()->get();
    $post = Post::Between('2022-12-01', '2022-12-16')->get();

    return $post;
});

