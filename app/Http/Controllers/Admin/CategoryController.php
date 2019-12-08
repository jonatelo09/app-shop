<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller {
	public function index() {
		$categories = Category::paginate(6);
		return view('admin.category.index')->with(compact('categories')); //devolvera el listado de los productos
	}

	public function create() {
		return view('admin.category.create'); //formulario de registro
	}

	public function store(Request $request) {
		//registrar el nuevo producto en la bd
		//dd($request->all());
		$messages = [
			'name.required' => 'Es necesario ingresar un nombre para el producto',
			'name.min' => 'El nombre del producto debe tener al menos 6 caracteres',
			'description.required' => 'La description corta es obligatorio',
			'description.max' => 'La descripcion corta admite solo 30 caracteres',
		];
		$rules = [
			'name' => 'required|min:6',
			'description' => 'required|max:100',
		];

		$this->validate($request, $rules, $messages);

		$categori = new Category();
		$categori->name = $request->input('name');
		$categori->description = $request->input('description');
		$categori->image = $request->input('image');
		$categori->save(); //ejecutar una consulta INSERT a la tabla productos

		if ($request->hasFile('image')) {
			$file = $request->file('image');
			$path = public_path() . '/images/categories';
			$fileName = uniqid() . '-' . $file->getClientOriginalName();
			$moved = $file->move($path, $fileName);

			//update category
			if ($moved) {
				$categori->image = $fileName;
				$categori->save(); //update
			}
		}

		return redirect('/admin/category');

	}

	public function edit($id) {
		$categori = Category::find($id);
		return view('admin.category.edit')->with(compact('categori'));
	}

	public function update(Request $request, $id) {
		$messages = [
			'name.required' => 'Es necesario ingresar un nombre para el producto',
			'name.min' => 'El nombre del producto debe tener al menos 6 caracteres',
			'description.required' => 'La description corta es obligatorio',
			'description.max' => 'La descripcion corta admite solo 30 caracteres',
		];
		$rules = [
			'name' => 'required|min:6',
			'description' => 'required|max:100',
		];

		$this->validate($request, $rules, $messages);

		$categori = Category::find($id);
		$categori->name = $request->input('name');
		$categori->description = $request->input('description');
		$categori->save(); //ejecutar una consulta UPDATE a la tabla productos

		return redirect('/admin/category');
	}

	public function destroy($id) {
		$categori = Category::find($id);
		$categori->delete(); //ejecutar una consulta DELETE a la tabla productos

		return redirect('/admin/category');
	}
}
