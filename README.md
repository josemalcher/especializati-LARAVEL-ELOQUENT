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



[Voltar ao Índice](#indice)

---


## <a name="parte10">10 - 03 - Opções de Colunas de Migrations no Laravel</a>



[Voltar ao Índice](#indice)

---


## <a name="parte11">11 - 04 - Chave Estrangeira no Laravel</a>



[Voltar ao Índice](#indice)

---


## <a name="parte12">12 - 05 - Laravel - Criar Colunas Novas em Tabelas Sem Perder os Dados</a>



[Voltar ao Índice](#indice)

---


## <a name="parte13">13 - 03 - Iniciando com o Eloquent</a>



[Voltar ao Índice](#indice)

---


## <a name="parte14">14 - 01 - Personalização de Models no Laravel</a>



[Voltar ao Índice](#indice)

---


## <a name="parte15">15 - 02 - Opções de Consultas no Eloquent do Laravel</a>



[Voltar ao Índice](#indice)

---


## <a name="parte16">16 - 03 - Laravel Eloquent - Filtrar Registros</a>



[Voltar ao Índice](#indice)

---


## <a name="parte17">17 - 04 - Laravel Eloquent - Paginação</a>



[Voltar ao Índice](#indice)

---


## <a name="parte18">18 - 05 - Laravel Eloquent - Ordenação</a>



[Voltar ao Índice](#indice)

---


## <a name="parte19">19 - 06 - Laravel Eloquent - Inserir Registro no Banco</a>



[Voltar ao Índice](#indice)

---


## <a name="parte20">20 - 07 - Laravel Eloquent - Mass Assignment</a>



[Voltar ao Índice](#indice)

---


## <a name="parte21">21 - 08 - Laravel Eloquent - Atualizar Registro no Banco</a>



[Voltar ao Índice](#indice)

---


## <a name="parte22">22 - 09 - Laravel Eloquent - Deletar Registro no Banco</a>



[Voltar ao Índice](#indice)

---


## <a name="parte23">23 - 10 - Laravel Eloquent - Soft Deleting</a>



[Voltar ao Índice](#indice)

---


## <a name="parte24">24 - 04 - Accessors & Mutators</a>



[Voltar ao Índice](#indice)

---


## <a name="parte25">25 - 01 - Laravel Eloquent - Criando um Accessor</a>



[Voltar ao Índice](#indice)

---


## <a name="parte26">26 - 02 - Laravel Eloquent - Casting</a>



[Voltar ao Índice](#indice)

---


## <a name="parte27">27 - 03 - Laravel Eloquent - Criando um Mutator</a>



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

