<?php

namespace App\Http\Controllers;


use App\Models\Genero;
use App\Models\Localidad;
use App\Models\Noticia;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Constraint;
use Intervention\Image\Facades\Image;


class NoticiasController extends Controller
{
    public function index()
    {
       $noticias = Noticia::with(['localidad','generos'])->get();
        return view('noticias/index', [
            'noticias' => $noticias,
            ]
        );
    }

    public function ver($id)
    {
        $noticia= Noticia::findOrFail($id);
        $tickets = Ticket::all();
        return view('noticias.ver',[
                'noticia'=>$noticia,
                'tickets' => $tickets,
        ]);

    }

    public function crearForm()
    {
        $localidades = Localidad::all();
        $generos = Genero::all();
        return view('noticias/form-nueva', [
            'localidades' => $localidades,
            'generos' => $generos,
        ]);
    }

    public function crearGrabar(Request $request)
    {
        $request->validate(Noticia::$rules, Noticia::$rulesMessages);
        $data = $request -> all();
        $data['poster'] = $this->uploadImage($request);

        try {
            DB::transaction(function () use($data){
                $noticia = Noticia::create($data);
                $noticia->generos()->attach($data['genero_id'] ?? []);
            });

        } catch (\Exception $e){
            return $this->toRoute('noticias.index', [
                'error'=>'La noticia no pudo ser creada por un error en la base de datos.'])
            ->withInput();
        }
        return $this->toRoute('noticias.index', [
            'success'=>'La noticia <b>' . e($data['titulo']) . '</b> fue agregada correctamente.']);
    }

    public function editarForm (int $id)
    {
        $noticia = Noticia::findOrFail($id);
        $localidades = Localidad::all();
        $generos = Genero::all();
        return view('noticias.form-editar', [
            'noticia'=>$noticia,
            'localidades' => $localidades,
            'generos' => $generos,
        ]);
    }

    public function editarGrabar(Request $request, int $id)
    {
        $noticia = Noticia::findOrFail($id);
        $request->validate(Noticia::$rules, Noticia::$rulesMessages);
        $data = $request -> all();
        if($request->hasFile('poster')) {
            $data['poster'] = $this->uploadImage($request);
        }

        try {
            DB::transaction(function () use($noticia,$data){
                $noticia->update($data);
                $noticia->generos()->sync($data['genero_id'] ?? []);
            });

        } catch (\Exception $e){
            return $this->toRoute('noticias.index', [
                'error'=>'La noticia no pudo ser creada por un error en la base de datos.'])
                ->withInput();
        }

        return $this->toRoute('noticias.index', [
            'success'=>'La noticia <b>' . e($noticia->titulo) . '</b> fue editada correctamente.'
        ]);
    }

    public function eliminar (int $id)
    {
       $noticia = Noticia::findOrFail($id);

        try {
            DB::transaction(function () use($noticia){
                $noticia->generos()->detach();
                $noticia -> delete();
            });
        } catch (\Exception $e){
            return $this->toRoute('noticias.index', [
                'error'=>'La noticia <b>' . e($noticia->titulo) . '</b> no pudo ser eliminada.'
            ]);
        }
        return $this->toRoute('noticias.index', [
            'success' => 'La noticia <b>' . e($noticia->titulo) . '</b> fue eliminada correctamente.'
        ]);
    }
/**
 * @param string $route
 * $param array $message
 * @param \Illuminate\Http\RedirectResponse
 */

    protected function toRoute(string $route, array $messages = []): \Illuminate\Http\RedirectResponse
    {

        $redirect = redirect()->route($route);

        foreach($messages as $type => $message) {

            $redirect->with('message.' . $type, $message);
        }

        return $redirect;
    }
    /**
     *@param Request $request
     * @param string $field
     *@return string|null
     */
    protected function uploadImage($request, $field = 'poster'):string|null
    {
        if ($request->hasFile($field) && $request->file($field)->isValid()){
            $filename = date('YmdHis_') . "." . $request->file($field)->extension();

            Image::make($request->file($field))->resize(600,600, function (Constraint $constraint){
                $constraint->aspectRatio();
                $constraint->upsize();
            })
                ->save(public_path('imgs/'.$filename));
            return $filename;
        }
        return null;
    }

}
