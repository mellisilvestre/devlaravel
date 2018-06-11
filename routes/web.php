<?php

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');   //helper
});

Route::get('/who', function () {
   echo "WTF are you?";
});

/*
Route::get('/blade', function () {
    $nome = "Marcio Melli";
    $variavel1 = "iniciando com blade";
    return view('test') 
        ->with('nome', $nome)
        ->with('variavel1', $variavel1);
});


Route::group(['prefix' => '/'], function(){
  Route::get('cliente/cadastrar', 'ClientsController@cadastrar');    
  Route::get('env', function(){
      var_dump(getenv('NOME'));
  });
});

Route::group(['prefix' => '/admin'], function(){
    //Route::get('cliente', 'ClientsController@listar');   
    Route::group(['prefix' => '/cliente'], function(){
       Route::get('cadastrar', 'ClientsController@cadastrar');    
    });
});



Route::get('cliente/cadastrar', function(){
    $nome = "Marcio Melli";
    $variavel1 = "vlr x from cliente\cadastrar";
    //return view('cadastrar', [
    //    'nome' => 'nome 1',
    //    'variavel1' => 'valor 1'
    //    ]);   
    //return view('cadastrar', 
    //         compact('nome', 'variavel1'));
    //         
    return view('cliente.cadastrar')
        ->with('nome', $nome)
        ->with('variavel1', $variavel1);

});



Route::get('/cliente', function() {
    $csrfToken=csrf_token();
    $html = "
    <html>
    <body>
        <h1>Cliente</h1>
        <form method='post' action ='/cliente/cadastrar'>
            <input type='hidden' name='_token' value='$csrfToken'/>
            <input type='text' name='name'/>
            <button type='submit'>Enviar</button>
        </form>
    </body>
    </html>
    ";
    return $html;
});

Route::post('/cliente/cadastrar', function(Request $request){
    echo $request->get('name');
    echo $request->name;
});


Route::get('/admin/cliente', function() {
    return "Hi There from admin!";
});

Route::get('/cliente-echo', function() {
    echo "Hi There with eco!";
});

Route::get('/produto/{name}/{id}', function($name, $id) {
    return "Produto: $name - $id" ;
});

Route::get('/fornecedor/{name}/{id?}', function($name, $id = '33') {
    return "Fornecedor: $name - $id" ;
});
*/