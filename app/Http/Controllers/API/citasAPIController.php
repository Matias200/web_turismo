<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatecitasAPIRequest;
use App\Http\Requests\API\UpdatecitasAPIRequest;
use App\Models\citas;
use App\Repositories\citasRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;

/**
 * Class citasAPIController
 */
class citasAPIController extends AppBaseController
{
    private citasRepository $citasRepository;

    public function __construct(citasRepository $citasRepo)
    {
        $this->citasRepository = $citasRepo;
    }

    /**
     * Display a listing of the citas.
     * GET|HEAD /citas
     */
    public function index(Request $request): JsonResponse
    {
        $citas = $this->citasRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($citas->toArray(), 'Citas retrieved successfully');
    }

    /**
     * Store a newly created citas in storage.
     * POST /citas
     */
    public function store(CreatecitasAPIRequest $request): JsonResponse
    {
        $input = $request->all();

        $citas = $this->citasRepository->create($input);

        return $this->sendResponse($citas->toArray(), 'Citas saved successfully');
    }

    /**
     * Display the specified citas.
     * GET|HEAD /citas/{id}
     */
    public function show($id): JsonResponse
    {
        /** @var citas $citas */
        $citas = $this->citasRepository->find($id);

        if (empty($citas)) {
            return $this->sendError('Citas not found');
        }

        return $this->sendResponse($citas->toArray(), 'Citas retrieved successfully');
    }

    /**
     * Update the specified citas in storage.
     * PUT/PATCH /citas/{id}
     */
    public function update($id, UpdatecitasAPIRequest $request): JsonResponse
    {
        $input = $request->all();

        /** @var citas $citas */
        $citas = $this->citasRepository->find($id);

        if (empty($citas)) {
            return $this->sendError('Citas not found');
        }

        $citas = $this->citasRepository->update($input, $id);

        return $this->sendResponse($citas->toArray(), 'citas updated successfully');
    }

    /**
     * Remove the specified citas from storage.
     * DELETE /citas/{id}
     *
     * @throws \Exception
     */
    public function destroy($id): JsonResponse
    {
        /** @var citas $citas */
        $citas = $this->citasRepository->find($id);

        if (empty($citas)) {
            return $this->sendError('Citas not found');
        }

        $citas->delete();

        return $this->sendSuccess('Citas deleted successfully');
    }
}
