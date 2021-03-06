<?php

namespace CodeProject\Services;

use CodeProject\Repositories\ProjectRepository;
use CodeProject\Validators\ProjectMemberValidator;
use CodeProject\Validators\ProjectValidator;
use Prettus\Validator\Exceptions\ValidatorException;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ProjectService
{
    /*
     * @var ProjectRepository
     */
    protected $repository;
    /**
     * @var ProjectValidator
     */
    private $validator;

    public function __construct(ProjectRepository $repository, ProjectValidator $validator,
                                ProjectMemberValidator $memberValidator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
        $this->memberValidator = $memberValidator;
    }

    public function show($id){
        try{
            return [
                "success" => $this->repository->with(['owner', 'client'])->find($id)
            ];
        } catch(ModelNotFoundException $e) {
            return [
                "success" => false,
                "message" => "Cliente ID: {$id} inexistente!"
            ];
        }
    }

    public function create(array $data)
    {
        try {
            $this->validator->with($data)->passesOrFail();
            return $this->repository->create($data);
        } catch(ValidatorException $e) {
            return [
                'success' => false,
                'message' => $e->getMessageBag()
            ];
        }
    }

    public function update(array $data, $id)
    {
        try {
            $this->validator->with($data)->passesOrFail();
            return $this->repository->update($data, $id);
        } catch(ValidatorException $e) {
            return [
                'success' => false,
                'message' => $e->getMessageBag()
            ];
        } catch(ModelNotFoundException $e){
            return [
                'success' => false,
                'message' => 'Projeto inexistente!',
            ];
        }
    }

    public function destroy($id)
    {
        try
        {
            return ["success" => $this->repository->delete($id)];
        } catch(ModelNotFoundException $e){
            return [
                'success' => false,
                'message' => 'Projeto inexistente!',
            ];
        }
    }

    public function isMember($projectId, $memberId)
    {
        return $this->repository->isMember($projectId, $memberId);
    }

    public function addMember($data){
        try {
            $this->memberValidator->with( $data )->passesOrFail();

            return $this->repository->addMember($data['project_id'] ,$data['user_id']);
        } catch (ValidatorException $e) {
            return [
                'success' => false,
                'message' => $e->getMessageBag()
            ];
        }
    }

    public function removeMember($projectId, $memberId){
        try {
            return $this->repository->removeMember($projectId, $memberId);
        } catch (ValidatorException $e) {
            return [
                'success' => false,
                'message' => $e->getMessageBag()
            ];
        }
    }
}