<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UsuarioController extends Controller
{
    private $token = 'ff63b816357ee3098eb0504de43be96c';
    private $domainname = 'https://jademlearning.com/aula5';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.usuario.consulta');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function consulta(Request $request){
        $username = $request->input('username');
        $functionname = 'core_user_get_users';
        $serverurl = $this->domainname . '/webservice/rest/server.php'
        . '?wstoken=' . $this->token 
        . '&wsfunction='.$functionname
        .'&moodlewsrestformat=json&criteria[0][key]=username&criteria[0][value]='.$username;
        $usuario = Http::get($serverurl);
        //return $usuario;
        return view('admin.usuario.consulta',compact('usuario'));
    }

    public function consultapdf($username){
        $functionname = 'core_user_get_users';
        $serverurl = $this->domainname . '/webservice/rest/server.php'
        . '?wstoken=' . $this->token 
        . '&wsfunction='.$functionname
        .'&moodlewsrestformat=json&criteria[0][key]=username&criteria[0][value]='.$username;
        $usuario = Http::get($serverurl);
        $pdf = PDF::loadView('admin.usuario.consultapdf',compact('usuario'));
        //return view('admin.usuarios.consultapdf',compact('usuario'));
        return $pdf->download('estudiante.pdf');
    }
}
