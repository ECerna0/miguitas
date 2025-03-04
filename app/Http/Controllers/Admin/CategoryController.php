<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\SubCategorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;
use mysql_xdevapi\Exception;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showCategoriesStore()
    {
        return view("categories.index");
    }


    public function index(Categorie $category = null)
    {
        $categories = Categorie::with("subcategories")->get()->makeHidden(['updated_at', 'created_at']);
        return Inertia::render('Admin/Categories', ["categories" => $categories, "$category" => $category]);
//        return view("admin.categories.index", ["categories" => $categories, "$category" => $category]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return redirect()->route("admin.categories.index");
    }

    public function show()
    {
//        return redirect()->route("admin.categories.index");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $cat = new Categorie();
            $image = null;
            if ($request->category_type !== "principal") {
                $cat->parent_id = $request->parent_id;
            }
            if ($request->hasFile("image")) {
                $image = ImageHelper::saveImage($request->file("image"), "images/categories");
            }
            $cat->name = $request->name;
            $cat->image = $image;
            if ($cat->save()) {
                DB::commit();
                return response()->json(['message' => 'Category saved successfully']);
            } else {
                DB::rollBack();
                return response()->json(['message' => 'Category unssaved successfully']);
            }

        } catch (\Exception $exception) {
            DB::rollBack();
            return response()->json(['message' => $exception->getMessage()], 500);
        }
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categorie = Categorie::find($id);
        if (!$categorie) {
            return redirect()->back()->with("error", "No se pudo encontrar la categoría");
        }
        $categorie->image = Storage::url($categorie->image);
        return response()->json(["categorie" => $categorie]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            DB::beginTransaction();
            $categorie = Categorie::find($id);
            if (!$categorie) {
                DB::rollBack();
                return response()->json(['message' => "No se pudo encontrar la categoría"], 500);
            }

            $validated = $categorie;
//            dd($request->parent_id);
            $validated->name = $request->name;
            $validated->parent_id = $request->parent_id === "null" ? null : $request->parent_id;
            if ($request->hasFile("image")) {
                if ($categorie->image) {
                    ImageHelper::deleteImage($categorie->image);
                }
                $validated->image = ImageHelper::saveImage($request->file("image"), "images/categories");
            }
            if ($validated->save()) {
                DB::commit();
                return response()->json(['message' => 'Category saved successfully']);
            } else {
                DB::rollBack();
                return response()->json(['message' => 'Unable to save'], 500);
            }
        } catch (\Exception $exception) {
            DB::rollBack();
            return response()->json(['message' => $exception->getMessage()], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            DB::beginTransaction();
            $categorie = Categorie::find($id);
            if (!$categorie) {
                return redirect()->back()->with("error", "No se pudo eliminar la categoría");
            }

            if ($categorie->image) {
                ImageHelper::deleteImage($categorie->image);
            }
            DB::commit();
            if ($categorie->delete()) {
                DB::commit();
                return response()->json(['message' => 'Category deleted successfully']);
            } else {
                DB::rollBack();
                return response()->json(['message' => 'Unable to delete'], 500);
            }
        } catch (\Exception $exception) {
            DB::rollBack();
            return response()->json(['message' => $exception->getMessage()], 500);
        }
    }


    public function search(Request $request)
    {
        $query = Categorie::query();
        if ($request->input("inputSearch")) {
            $name = $request->input("inputSearch");
            $query->where("name", "like", "%$name%");
        }

        if ($request->input("filter")) {
            $filters = $request->input("filter");

            if (!(in_array('has_subcategories', $filters) && in_array('no_subcategories', $filters))) {
                if (in_array('no_subcategories', $filters)) {
                    $query->doesntHave('subcategories');
                }

                if (in_array('has_subcategories', $filters)) {
                    $query->has('subcategories');
                }
            }
        }

        $categories = $query->get();
        if ($request->ajax()) {
            return view("layouts.__partials.ajax.row-categorie", compact("categories"))->render();
        }
    }

    public function getAllCategories()
    {
        $categories = Categorie::with("subcategories")->get()->makeHidden(['updated_at', 'created_at']);
//        dd($categories);
        return response()->json(["categories" => $categories]);
    }
}
