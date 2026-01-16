<?php

namespace App\Interfaces;

interface SemesterInterface
{
    public function create($request);
    public function find($id);
    public function update($request, $id);

    public function getAll($session_id);
}