<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function getList()
    {
        return response()->json(
            Attendance::all()
        );
    }

    public function getOne(int $id)
    {
        return response()->json(
            Attendance::findOrFail($id)
        );
    }
    
    public function post(Request $request)
    {
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