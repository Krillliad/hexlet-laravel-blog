<?php

namespace App\Http\Controllers;

use App\Models\Information as Model;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function index(Request $request) {
        $informational = Model::all();
        $search = $request->input('search');

        if ($search) {
            $informational = Model::where('name' , 'like', '%'.$search.'%')->get();
        }

//        $search ? $informational = Information::where('name' , 'like', '%'.$search.'%')->get() : $informational;

        return view('information.index', compact('informational'));
    }

    public function show($id) {
//        $information = Information::findOrFail($id);
        $information = Model::select([ 'name', 'body'])->where('id', $id)->first();

        return view('information.show', compact('information'));
    }

    public function create() {
        $information = new Model();

        return view('information.create', compact('information'));
    }

    public function store(Request $request) {
        {
            // Проверка введённых данных
            // Если будут ошибки, то возникнет исключение
            // Иначе возвращаются данные формы
            $data = $this->validate($request, [
                'name' => 'required|unique:information',
                'body' => 'required|min:10',
            ]);

            $information = new Model();
            // Заполнение статьи данными из формы
            $information->fill($data);
            // При ошибках сохранения возникнет исключение
            $information->save();

            // Редирект на указанный маршрут
            return redirect()
                ->route('information.index');
        }
    }
}
