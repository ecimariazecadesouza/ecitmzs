<?php

namespace App\Repositories;

use App\Interfaces\SemesterInterface;
use App\Models\Semester;
use App\Models\SchoolSession;

class SemesterRepository implements SemesterInterface
{
    public function create($request)
    {
        try {
            Semester::create($request);
        } catch (\Exception $e) {
            throw new \Exception('Failed to create School Semester. ' . $e->getMessage());
        }
    }

    public function getAll($session_id)
    {
        return Semester::where('session_id', $session_id)->orderBy('id', 'desc')->get();
    }

    public function find($id)
    {
        return Semester::findOrFail($id);
    }

    public function update($request, $id)
    {
        $semester = Semester::findOrFail($id);
        $semester->semester_name = $request->semester_name;
        $semester->start_date = $request->start_date;
        $semester->end_date = $request->end_date;
        $semester->save();
    }
}