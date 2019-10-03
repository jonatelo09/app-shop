<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller {
	public function index() {
		$products = Product::paginate(5);
		return view('admin.products.index')->with(compact('products')); //devolvera el listado de los productos
	}

	public function create() {
		$categories = Category::orderBy('name')->get();
		return view('admin.products.create')->with(compact('categories')); //formulario de registro
	}

	public function store(Request $request) {
		//registrar el nuevo producto en la bd
		//dd($request->all());
		$messages = [
			'name.required' => 'Es necesario ingresar un nombre para el producto',
			'name.min' => 'El nombre del producto debe tener al menos 6 caracteres',
			'description.required' => 'La description corta es obligatorio',
			'description.max' => 'La descripcion corta admite solo 30 caracteres',
			'price.required' => 'Es obligatorio definir un precio para el producto',
			'price.numeric' => 'Ingrese u  numero valido',
			'price.min' => 'No se admiten valores negativos',
		];
		$rules = [
			'name' => 'required|min:6',
			'description' => 'required|max:100',
			'price' => 'required|numeric|min:0',
		];

		$this->validate($request, $rules, $messages);

		$product = new Product();
		$product->name = $request->input('name');
		$product->description = $request->input('description');
		$product->price = $request->input('price');
		$product->long_description = $request->input('long_description');
		$product->category_id = $request->category_id;
		$product->save(); //ejecutar una consulta INSERT a la tabla productos

		return redirect('/admin/products');

	}

	public function edit($id) {
		$categories = Category::orderBy('name')->get();
		$product = Product::find($id);
		return view('admin.products.edit')->with(compact('product', 'categories'));
	}

	public function update(Request $request, $id) {
		$messages = [
			'name.required' => 'Es necesario ingresar un nombre para el producto',
			'name.min' => 'El nombre del producto debe tener al menos 6 caracteres',
			'description.required' => 'La description corta es obligatorio',
			'description.max' => 'La descripcion corta admite solo 30 caracteres',
			'price.required' => 'Es obligatorio definir un precio para el producto',
			'price.numeric' => 'Ingrese u  numero valido',
			'price.min' => 'No se admiten valores negativos',
		];
		$rules = [
			'name' => 'required|min:6',
			'description' => 'required|max:100',
			'price' => 'required|numeric|min:0',
		];

		$this->validate($request, $rules, $messages);

		$product = Product::find($id);
		$product->name = $request->input('name');
		$product->description = $request->input('description');
		$product->price = $request->input('price');
		$product->long_description = $request->input('long_description');
		$product->category_id = $request->category_id;
		$product->save(); //ejecutar una consulta UPDATE a la tabla productos

		return redirect('/admin/products');
	}

	public function destroy($id) {
		$product = Product::find($id);
		$product->delete(); //ejecutar una consulta DELETE a la tabla productos

		return redirect('/admin/products');
	}

	public function prueba() {
		return view('admin.products.prueba');
	}

}
