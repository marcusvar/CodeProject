<?php

namespace CodeProject\Repositories;

use CodeProject\Entities\Project;
use Prettus\Repository\Eloquent\BaseRepository;

class ProjectRepositoryEloquent extends BaseRepository implements ProjectRepository
{
    public function model()
    {
        return Project::class;
    }

    public function isMember($projectId, $userId)
    {
        return ["member" => ($this->getMember($projectId, $userId) !== null)];
    }

    public function getMember($projectId, $userId)
    {
        $project = $this->find($projectId);
        foreach ($project->members as $member) {
            if($member->id == $userId){
                return $member;
            }
        }
        return null;
    }

    public function addMember($projectId ,$userId)
    {
        $this->find($projectId)->members()->attach($userId);
        return true;
    }

    public function removeMember($projectId ,$userId)
    {
        $this->find($projectId)->members()->detach($userId);
        return true;
    }

}