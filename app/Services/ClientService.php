<?php

namespace CodeProject\Services;

use CodeProject\Repositories\ClientRepository;
use CodeProject\Validators\ClientValidator;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Prettus\Validator\Exceptions\ValidatorException;

class ClientService
{
    /*
     * @var ClientRepository
     */
    protected $repository;
    /**
     * @var ClientValidator
     */
    private $validator;

    public function __construct(ClientRepository $repository, ClientValidator $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
    }

    public function show($id){
        try{
            return [
                "success" => $this->repository->find($id)
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
                'message' => 'Cliente inexistente!',
            ];
        }
    }

    public function destroy($id)
    {
        try {
            return ["success" => $this->repository->delete($id)];
        } catch(ModelNotFoundException $e){
            return [
                'success' => false,
                'message' => 'Cliente inexistente!',
            ];
        } catch(\PDOException $e){
            return [
                'success' => false,
                'message' => 'Existem projetos cadastrados a este cliente!',
            ];

        }
    }
}