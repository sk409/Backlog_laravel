<?php

namespace App\Repositories;

interface TaskMilestoneRepository
{
    public function all();
    public function save(string $name, string $details, string $startOn, string $endOn, int $projectId);
}
