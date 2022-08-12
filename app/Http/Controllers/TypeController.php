<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function getList()
    {
        return response()->json(
            Type::all()
        );
    }

    public function getOne(int $id)
    {
        return response()->json(
            Type::findOrFail($id)
        );
    }
    
    public function post(Request $request)
    {
        $type = Type::create(
            $request->all()
        );

        return response()->json($type);
    }

    public function patch(Request $request, int $id)
    {
        $type = Type::findOrFail($id);

        $type->name = $request->get('name');
        $type->description = $request->get('description');

        $type->save();

        return  response()->json($type);
    }

    public function delete(int $id) 
    {
        Type::findOrFail($id)->delete();

        return response()->json([
            'message' => 'type deleted',
        ]);
    }
}