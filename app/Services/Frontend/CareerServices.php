<?php

namespace App\Services\Frontend;

use App\ApplicationJob;
use App\Models\Career;
use App\Services\BaseService;

class CareerServices extends BaseService
{

    protected $applicationJob;
    /**
     * CareerServices Constructor
     *
     *
     * @param Career $career
     **/
    public function __construct(Career $career, ApplicationJob $applicationJob)
    {
        $this->model = $career;
        $this->applicationJob = $applicationJob;
    }

    public function findActiveByUuid($uuid)
    {
        return $this->model->uuid($uuid)->active()->first();
    }

    public function store($uuid, array $data, $file = false)
    {
        $career = $this->model->uuid($uuid)->first();
        $application = $this->applicationJob::create([
            'name' => $data['name'],
            'career_id' => $career->id,
            'gender' => $data['gender'],
            'email' => $data['email'],
            'message' => $data['message'],
            'phone' => $data['phone']
        ]);

        if ($file) {
            $ext = $file->extension();
            $application->resume_location = $file->store('/applications', 'public');

            $application->save();
        }

        return $career;
    }
}
