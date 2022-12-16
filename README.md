# CURSO DE LARAVEL ELOQUENT

https://academy.especializati.com.br/curso/laravel-eloquent

## <a name="indice">Índice</a>

1. [01 - Intro](#parte1)     
2. [01 - O que é o Eloquent ORM do Laravel](#parte2)     
3. [02 - Instalar e Configurar o Laravel com Docker](#parte3)     
4. [03 - Versionar Projeto Laravel com Git e Armazenar no GitHub](#parte4)     
5. [04 - Models e Migrations no Laravel](#parte5)     
6. [05 - Conexão Banco de Dados no Laravel](#parte6)     
7. [02 - Migrations e Ferramentas](#parte7)     
8. [01 - Comandos de Migration no Laravel e MySql Workbench](#parte8)     
9. [02 - Instalar o Telescope e o DebugBar](#parte9)     
10. [03 - Opções de Colunas de Migrations no Laravel](#parte10)     
11. [04 - Chave Estrangeira no Laravel](#parte11)     
12. [05 - Laravel - Criar Colunas Novas em Tabelas Sem Perder os Dados](#parte12)     
13. [03 - Iniciando com o Eloquent](#parte13)     
14. [01 - Personalização de Models no Laravel](#parte14)     
15. [02 - Opções de Consultas no Eloquent do Laravel](#parte15)     
16. [03 - Laravel Eloquent - Filtrar Registros](#parte16)     
17. [04 - Laravel Eloquent - Paginação](#parte17)     
18. [05 - Laravel Eloquent - Ordenação](#parte18)     
19. [06 - Laravel Eloquent - Inserir Registro no Banco](#parte19)     
20. [07 - Laravel Eloquent - Mass Assignment](#parte20)     
21. [08 - Laravel Eloquent - Atualizar Registro no Banco](#parte21)     
22. [09 - Laravel Eloquent - Deletar Registro no Banco](#parte22)     
23. [10 - Laravel Eloquent - Soft Deleting](#parte23)     
24. [04 - Accessors & Mutators](#parte24)     
25. [01 - Laravel Eloquent - Criando um Accessor](#parte25)     
26. [02 - Laravel Eloquent - Casting](#parte26)     
27. [03 - Laravel Eloquent - Criando um Mutator](#parte27)     
28. [05 - Avançando com o Eloquent](#parte28)     
29. [01 - Laravel Eloquent - Local Scope](#parte29)     
30. [02 - Laravel Eloquent - Anonymous Global Scopes](#parte30)     
31. [03 - Laravel Eloquent - Global Scopes](#parte31)     
32. [04 - Laravel Eloquent - Observers](#parte32)     
33. [05 - Laravel Eloquent - Eventos](#parte33)     
34. [06 - Factories](#parte34)     
35. [01 - Laravel Factories e Seeders](#parte35)     
---


## <a name="parte1">1 - 01 - Intro</a>



[Voltar ao Índice](#indice)

---


## <a name="parte2">2 - 01 - O que é o Eloquent ORM do Laravel</a>

- https://laravel.com/docs/8.x/eloquent
- https://laravel.com/docs/9.x/eloquent

[Voltar ao Índice](#indice)

---


## <a name="parte3">3 - 02 - Instalar e Configurar o Laravel com Docker</a>



[Voltar ao Índice](#indice)

---


## <a name="parte4">4 - 03 - Versionar Projeto Laravel com Git e Armazenar no GitHub</a>



[Voltar ao Índice](#indice)

---


## <a name="parte5">5 - 04 - Models e Migrations no Laravel</a>

```
$ php artisan make:model Post -m

   INFO  Model [C:\Users\josem\Documents\workspaces\especializati-LARAVEL-ELOQUENT\cursoeloquent9\app/Models/Post.php] created successfully.

   INFO  Migration [C:\Users\josem\Documents\workspaces\especializati-LARAVEL-ELOQUENT\cursoeloquent9\database\migrations/2022_12_13_120401_create_posts_table.php] created successfully.  

```

[Voltar ao Índice](#indice)

---


## <a name="parte6">6 - 05 - Conexão Banco de Dados no Laravel</a>

- cursoeloquent9/config/database.php

[Voltar ao Índice](#indice)

---


## <a name="parte7">7 - 02 - Migrations e Ferramentas</a>



[Voltar ao Índice](#indice)

---


## <a name="parte8">8 - 01 - Comandos de Migration no Laravel e MySql Workbench</a>

```
migrate
  migrate:fresh          Drop all tables and re-run all migrations
  migrate:install        Create the migration repository
  migrate:refresh        Reset and re-run all migrations
  migrate:reset          Rollback all database migrations
  migrate:rollback       Rollback the last database migration
  migrate:status         Show the status of each migration


$ php artisan migrate

   INFO  Preparing database.

  Creating migration table .............................................38ms DONE

   INFO  Running migrations.  

  2014_10_12_000000_create_users_table .................................32ms DONE
  2014_10_12_100000_create_password_resets_table .......................25ms DONE
  2019_08_19_000000_create_failed_jobs_table ...........................28ms DONE
  2019_12_14_000001_create_personal_access_tokens_table ................41ms DONE

$ php artisan migrate

   INFO  Nothing to migrate.

$ php artisan migrate
  2019_08_19_000000_create_failed_jobs_table ............................ 8ms DONE
  2014_10_12_100000_create_password_resets_table ........................ 10ms DONE
  2014_10_12_000000_create_users_table .................................. 8ms DONE

   INFO  Running migrations.

  2014_10_12_000000_create_users_table .................................. 38ms DONE
  2014_10_12_100000_create_password_resets_table ........................ 33ms DONE
  2019_08_19_000000_create_failed_jobs_table ............................ 30ms DONE
  2019_12_14_000001_create_personal_access_tokens_table ................. 43ms DONE


$ php artisan migrate:fresh

  Dropping all tables ......................................... 48ms DONE

   INFO  Preparing database.  

  Creating migration table ................................... 14ms DONE

   INFO  Running migrations.  

  2014_10_12_000000_create_users_table ........................ 25ms DONE
  2014_10_12_100000_create_password_resets_table .............. 25ms DONE
  2019_08_19_000000_create_failed_jobs_table .................. 26ms DONE
  2019_12_14_000001_create_personal_access_tokens_table ....... 36ms DONE


```

[Voltar ao Índice](#indice)

---


## <a name="parte9">9 - 02 - Instalar o Telescope e o DebugBar</a>

- https://laravel.com/docs/8.x/telescope
- https://github.com/barryvdh/laravel-debugbar

```
$ composer require laravel/telescope
Info from https://repo.packagist.org: #StandWithUkraine
Using version ^4.10 for laravel/telescope


$ php artisan telescope:install
Publishing Telescope Service Provider...
Publishing Telescope Assets...
Publishing Telescope Configuration...
Telescope scaffolding installed successfully.


$ php artisan migrate

   INFO  Running migrations.

  2018_08_08_100000_create_telescope_entries_table ...................................................................................... 204ms DONE


$ composer require barryvdh/laravel-debugbar --dev
Using version ^3.7 for barryvdh/laravel-debugbar

```

[Voltar ao Índice](#indice)

---


## <a name="parte10">10 - 03 - Opções de Colunas de Migrations no Laravel</a>

- https://laravel.com/docs/9.x/migrations#available-column-types

[Voltar ao Índice](#indice)

---


## <a name="parte11">11 - 04 - Chave Estrangeira no Laravel</a>

```
$ php artisan make:model Post -m

   INFO  Model [C:\Users\josem\Documents\workspaces\especializati-LARAVEL-ELOQUENT\cursoeloquent9\app/Models/Post.php] created successfully.

   INFO  Migration [C:\Users\josem\Documents\workspaces\especializati-LARAVEL-ELOQUENT\cursoeloquent9\database\migrations/2022_12_13_173226_create_posts_table.php] created successfully.  


```

- cursoeloquent9/database/migrations/2022_12_13_173226_create_posts_table.php

```php
public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->constrained('users');

            $table->string('title')->unique();
            $table->text('body');

            $table->timestamps();

            // $table->unsignedBigInteger('user_id');
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }
```

```
$ php artisan migrate

   INFO  Running migrations.

  2022_12_13_173226_create_posts_table ........................... 63ms DONE

```

[Voltar ao Índice](#indice)

---


## <a name="parte12">12 - 05 - Laravel - Criar Colunas Novas em Tabelas Sem Perder os Dados</a>

```
$ composer require doctrine/dbal
Info from https://repo.packagist.org: #StandWithUkraine
Using version ^3.5 for doctrine/dbal
```

```
$ php artisan make:migration add_collumn_date_users

   INFO  Migration [2022_12_13_180134_add_collumn_date_users] created successfully.
```

- cursoeloquent9\database\migrations\2022_12_13_180134_add_collumn_date_users.php

```php
 public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->date('date')->after('body');
        });
    }
```

```
$ php artisan migrate

   INFO  Running migrations.

  2022_12_13_180134_add_collumn_date_users ..................................... 278ms DONE
```

[Voltar ao Índice](#indice)

---


## <a name="parte13">13 - 03 - Iniciando com o Eloquent</a>



[Voltar ao Índice](#indice)

---


## <a name="parte14">14 - 01 - Personalização de Models no Laravel</a>

```php
class Post extends Model
{
    use HasFactory;

    protected $table = 'postagens'; // outro nome da tabela
    protected $primaryKey = 'id_postagens'; // outro nome do id
    protected $keyType = 'string'; // tipo do primarykey
    public $incrementing  = false; // desabilita o autoincrement na coluna id
    // https://laravel.com/docs/9.x/eloquent#primary-keys

    public $timestamps = true; // habilita ou desabilita a coluna de atualizado/criado
    const CREATED_AT = 'data_criancao';
    const UPDATED_AT = 'data_atualizacao';
    protected $dateFormat = 'Y-m-d H:i:s';

    // mudar o local ta tabela. Faz busca em outro banco
    protected $connection = 'pqsql';

    // Define um valor padrão da coluna. Caso não tenha sido feita no migration ou no DB
    protected $attributes = [
        'active' => true,
    ];

}
```

[Voltar ao Índice](#indice)

---


## <a name="parte15">15 - 02 - Opções de Consultas no Eloquent do Laravel</a>

```
$ php artisan tinker
Psy Shell v0.11.9 (PHP 8.0.16 — cli) by Justin Hileman

> \App\Models\User::factory()->count(100)->create();               
```

```php
Route::get('/select', function () {
    //$users = User::all();
    // $users = User::where('id', '>=', 10)->get();
    // $user = User::where('id', 10)->first();
    // $user = User::first();
    // $user = User::find(10);

    //$user = User::findOrFail(request('id')); // comum em uso em API
    // $user = User::where('name', request('name'))->firstOrFail(); // comum em uso em API
    $user = User::firstWhere('name', request('name')); // comum em uso em API



    dd($user);
});
```

[Voltar ao Índice](#indice)

---


## <a name="parte16">16 - 03 - Laravel Eloquent - Filtrar Registros</a>

```php
Route::get('/where', function (User $user) {
    //$user = $user->where('email', '=', 'zgoodwin@example.org')->first();
    // $user = $user->where('email', 'zgoodwin@example.org')->first(); // resultado é o mesmo do acima

    $filter = 'jose';
    // $users = $user->where('name', 'LIKE', "%$filter%")->get();
    // $users = $user->where('name', 'LIKE', "%$filter%")->orWhere('name', 'Barrett Sipes')->get();
    // ->toSql(); select * from `users` where `name` LIKE ? or `name` = ?

        $users = $user->where('name', 'LIKE', "%{$filter}%")
        ->orWhere(function ($query) use ($filter){
            $query->where('name', '<>', 'Jose');
            $query->where('name', '=', $filter);
        })
        ->toSql();
    // select * from `users` where `name` LIKE ? or (`name` <> ? and `name` = ?)

    dd($users);
});
```

[Voltar ao Índice](#indice)

---


## <a name="parte17">17 - 04 - Laravel Eloquent - Paginação</a>

```php
Route::get('/pagination', function (User $user) {
    $filter = request('filter');
    $paginate = request('paginate', 10);

    $users = $user->where('name', 'LIKE', "%{$filter}%")->paginate($paginate);
    // http://localhost:8000/pagination?page=2&filter=a&paginate=50
    return $users;
});
```

[Voltar ao Índice](#indice)

---


## <a name="parte18">18 - 05 - Laravel Eloquent - Ordenação</a>

```php
Route::get('/orderby', function () {
    $users = User::orderBy('id', 'DESC')->get();

    return $users;
});
```

[Voltar ao Índice](#indice)

---


## <a name="parte19">19 - 06 - Laravel Eloquent - Inserir Registro no Banco</a>

```php
Route::get('/insert', function (Post $post) {
    // FORMA MANUAL
    $post->user_id = 1;
    $post->title = 'Post ' . \Illuminate\Support\Str::random(10);
    $post->body = 'COnteudo do post teste';
    $post->date = date('Y-m-d');
    $post->save();

    $posts = Post::get();
    return $posts;
});
```

[Voltar ao Índice](#indice)

---


## <a name="parte20">20 - 07 - Laravel Eloquent - Mass Assignment</a>

```php
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
```

[Voltar ao Índice](#indice)

---


## <a name="parte21">21 - 08 - Laravel Eloquent - Atualizar Registro no Banco</a>

```php
Route::get('/update', function (Request $request) {

    if (!$post = Post::find(1))
        return 'Post not Found';

//    $post->title = 'Titulo atualizado';
//    $post->save();
    $post->update($request->all());

    dd(Post::find(1));
});
```

[Voltar ao Índice](#indice)

---


## <a name="parte22">22 - 09 - Laravel Eloquent - Deletar Registro no Banco</a>

```php
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
```

[Voltar ao Índice](#indice)

---


## <a name="parte23">23 - 10 - Laravel Eloquent - Soft Deleting</a>

```
$ php artisan make:migration add_collumn_deleted_at_posts

   INFO  Migration [2022_12_16_140740_add_collumn_deleted_at_posts] created succ
                                                                               cessfully.
```

```php
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->softDeletes();
        });
    }
```

```php
class Post extends Model
{
    use HasFactory, SoftDeletes;
```

```php
Route::get('/delete2', function () {

    Post::destroy(5);

    $posts = Post::get();

    return $posts;

});
```

[Voltar ao Índice](#indice)

---


## <a name="parte24">24 - 04 - Accessors & Mutators</a>

```php
<?php

namespace App\Accessors;

trait DefaultAccessors
{
    public function getTitleAttribute($value)
    {
        return strtoupper($value);
    }

    public function getTitleAndBOdyAttribute($value)
    {
        return $this->title . ' - ' . $this->body;
    }
}

```

```php
Route::get('/acessor', function () {

    $post = Post::first();
    return $post->title_and_body;

});
```

[Voltar ao Índice](#indice)

---


## <a name="parte25">25 - 01 - Laravel Eloquent - Criando um Accessor</a>

```php
<?php

namespace App\Accessors;

trait DefaultAccessors
{
    public function getTitleAttribute($value)
    {
        return strtoupper($value);
    }

    public function getTitleAndBOdyAttribute($value)
    {
        return $this->title . ' - ' . $this->body;
    }
}

```

```php
use App\Accessors\DefaultAccessors;
class Post extends Model
{
    use HasFactory, SoftDeletes, DefaultAccessors;

```

[Voltar ao Índice](#indice)

---


## <a name="parte26">26 - 02 - Laravel Eloquent - Casting</a>

- https://laravel.com/docs/master/eloquent-mutators#attribute-casting

```php
class Post extends Model
{
    use HasFactory, SoftDeletes, DefaultAccessors;

    protected $fillable = ['user_id', 'title', 'body', 'date'];

    protected $casts = [
        'date' => 'date',
        'active' => 'boolean'
    ];
    

```

[Voltar ao Índice](#indice)

---


## <a name="parte27">27 - 03 - Laravel Eloquent - Criando um Mutator</a>

```php
class Post extends Model
{
    use HasFactory, SoftDeletes, DefaultAccessors;

    protected $fillable = ['user_id', 'title', 'body', 'date'];

protected $casts = [ // como ele retorna dobanco de dados
        'date' => 'datetime:d/m/Y',
        'active' => 'boolean'
    ];
    
    public function setDateAttribute($value) // alterar o valor antes de inserir no bando de dados
    {
        $this->attributes['date'] = Carbon::make($value)->format('Y-m-d');
    }
```

```php
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


```

[Voltar ao Índice](#indice)

---


## <a name="parte28">28 - 05 - Avançando com o Eloquent</a>



[Voltar ao Índice](#indice)

---


## <a name="parte29">29 - 01 - Laravel Eloquent - Local Scope</a>



[Voltar ao Índice](#indice)

---


## <a name="parte30">30 - 02 - Laravel Eloquent - Anonymous Global Scopes</a>



[Voltar ao Índice](#indice)

---


## <a name="parte31">31 - 03 - Laravel Eloquent - Global Scopes</a>



[Voltar ao Índice](#indice)

---


## <a name="parte32">32 - 04 - Laravel Eloquent - Observers</a>



[Voltar ao Índice](#indice)

---


## <a name="parte33">33 - 05 - Laravel Eloquent - Eventos</a>



[Voltar ao Índice](#indice)

---


## <a name="parte34">34 - 06 - Factories</a>



[Voltar ao Índice](#indice)

---


## <a name="parte35">35 - 01 - Laravel Factories e Seeders</a>



[Voltar ao Índice](#indice)

---

