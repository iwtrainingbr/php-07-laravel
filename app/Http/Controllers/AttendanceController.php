<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Type;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function getList()
    {
        return response()->json(
            Attendance::with(Type::class)->get()
        );
    }

    public function getOne(int $id)
    {
        return response()->json(
            Attendance::with('type')->findOrFail($id)
        );
    }
    
    public function post(Request $request)
    {
        if (null === $request->get('type')) {
            return response()->json([
                'erro' => 'atributo "type" invalido'
            ]);
        }

        $attendance = Attendance::create(
            $request->all()
        );

        return response()->json($attendance);
    }

    public function patch(Request $request, int $id)
    {
        $attendance = Attendance::findOrFail($id);

        $attendance->type = $request->get('type');

        $attendance->save();

        return  response()->json($attendance);
    }

    public function delete(int $id) 
    {
        Attendance::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Attendance deleted',
        ]);
    }
}