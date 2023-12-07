<?php

namespace App\Http\Controllers;

use App\Models\Imagen_Hsitoria;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class CreateHistoryController extends Controller
{
    public function Formulario(){
        return view('formularioHistoria');
    }
    public function CreateHistory(){
        return view('subirhistoria');
    }
    public function preview(){
        return view('preview');
    }
    
    public function guardarHistoria(Request $request) {
        // Obtener las opciones seleccionadas
        $opciones = $request->input('opciones');

        // Obtener el texto del textarea
        $texto = $request->input('texto');

        // Almacenar la imagen en el sistema de archivos de Laravel
        $imagenPath = $request->file('imagen')->store('imagenes'); // 'imagenes' es el nombre de la carpeta donde se guardarán las imágenes

        // Puedes guardar la ruta de la imagen y otros datos en una base de datos aquí

        return "Datos guardados exitosamente"; // Puedes redirigir o mostrar un mensaje de éxito
    }
    public function pre(){
        $ultimoRegistro = Imagen_Hsitoria::latest()->first();
    
        if ($ultimoRegistro) {
            $imagen = $ultimoRegistro->imagen;
            $texto = $ultimoRegistro->texto;
        } else {
            $imagen = '';
            $texto = '';
        }
    
        return view('preview', ['imagen' => $imagen, 'texto' => $texto]);
    }
    public function crearh(Request $request)
{

    $request->validate([
        'texto' => 'required',
        'imagen' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);
   

    $historia = new Imagen_Hsitoria();
    $historia->texto = $request->texto;

    if ($request->hasFile('imagen')) {
        $imagenPath = $request->file('imagen')->store('public/imagenes');
        $historia->imagen = $imagenPath;
    }

    $historia->save();

    return response()->json(['message' => 'Historia creada con éxito']); 

}

public function mostrarh()
{
    $historias = Imagen_Hsitoria::all();

    return response()->json($historias);
}
    
}    
