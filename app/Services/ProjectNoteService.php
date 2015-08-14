<?php

namespace CodeProject\Services;

use CodeProject\Repositories\ProjectNoteRepository;
use CodeProject\Validators\ProjectNoteValidator;
use Prettus\Validator\Exceptions\ValidatorException;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ProjectNoteService
{
    /*
     * @var ProjectNoteRepository
     */
    protected $repository;
    /**
     * @var ProjectNoteValidator
     */
    private $validator;

    public function __construct(ProjectNoteRepository $repository, ProjectNoteValidator $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
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
}