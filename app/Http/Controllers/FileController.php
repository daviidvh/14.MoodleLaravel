<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use App\Models\FileModel;
use App\Models\Entrega;
use Carbon\Carbon;
class FileController extends Controller
{
    public function show($entregaId)
    {
        // Obtener la entrega por su ID
        $entrega = Entrega::findOrFail($entregaId);
    
        // Recoger todos los ficheros pertenecientes al usuario logueado
        $files = FileModel::where('user_id', '=', Auth::id())->get();
    
        return view('entregas.show', compact('entrega', 'files'));
    }
    
    
    
    

    public function store(Request $request) 
    {
        // 1. Validamos fichero
        $request->validate([
            'fichero' => 'required|file|mimes:pdf,docx,zip',
        ]);

        // 2. Capturamos fichero
        $archivo = $request->file('fichero');
        $extension = $archivo->getClientOriginalExtension();
        $entregaId = $request->input('entrega_id');

        //  dd($entregaId);

        // dd($archivo->getClientOriginalName());
        // exit();
        $hoy = Carbon::now()->format('Y-m-d-h-m-s');
        $nombre_fichero = $entregaId . '-' . Auth::id() . '-' . $hoy . '-' . $archivo->getClientOriginalName();
        //  dd($nombre_fichero);
        // 3. Insertamos fichero en el disco
        Storage::disk('public')->putFileAs(Auth::id(), $archivo, $nombre_fichero);
        //  dd($ruta);
        // dd($nombre_fichero);

        // 4. Almacenar ruta en el modelo
        FileModel::create([
            'nombre' =>$nombre_fichero,
            'extension' => $extension,
            'ubicacion' =>$entregaId.'/'. Auth::id().'/'.$nombre_fichero,
            'entregas_id' =>$entregaId,
            'user_id'=> Auth::id()
        ]);
        
        return redirect()->route('entrega.show', ['entrega' => $entregaId]);
    }


    public function destroy($id)
    {
        // Buscamos el fichero con el identificador asociado
        $file = FileModel::find($id);
    
        // Verificar si el archivo existe antes de intentar eliminarlo
        if ($file) {
            // Eliminar el archivo del sistema de archivos
            Storage::disk('public')->delete($file->ubicacion);
    
            // Eliminar el registro de la base de datos
            $file->delete();
    
            // Redirigir de regreso a la vista de detalles de la entrega
            return redirect()->route('entrega.show', ['entrega' => $file->entregas_id]);
        } else {
            // Si el archivo no existe, redirigir con un mensaje de error o manejarlo de otra manera
            return redirect()->back()->with('error', 'El archivo no existe.');
        }
    }
    
}
