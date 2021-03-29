<?php
/**
 * Created by PhpStorm.
 * User: mhmj
 * Date: 18/10/2020
 * Time: 6:22 PM
 */

namespace App\Http\Controllers\Classroom\HQ\Deletes;

use App\Classroom;

class DeleteClassroom
{
    /** @var  Classroom */
    private $repository;

    /**
     * DeleteClassroom constructor.
     * @param Classroom $repository
     */
    public function __construct(Classroom $repository)
    {
        $this->repository = $repository;
    }


    public function deleteClassroom($id)
    {

        $classroom = $this->repository->findOrFail($id);

        $classroom->delete();

        return $classroom;


    }
}