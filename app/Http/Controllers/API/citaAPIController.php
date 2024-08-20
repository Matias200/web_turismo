<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatecitaAPIRequest;
use App\Http\Requests\API\UpdatecitaAPIRequest;
use App\Models\cita;
use App\Repositories\citaRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;

/**
 * Class citaAPIController
 */
class citaAPIController extends AppBaseController
{
    private citaRepository $citaRepository;

    public function __construct(citaRepository $citaRepo)
    {
        $this->citaRepository = $citaRepo;
    }

    /**
     * Display a listing of the citas.
     * GET|HEAD /citas
     */
    public function index(Request $request): JsonResponse
    {
        $citas = $this->citaRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($citas->toArray(), 'Citas retrieved successfully');
    }

    /**
     * Store a newly created cita in storage.
     * POST /citas
     */
    public function store(CreatecitaAPIRequest $request): JsonResponse
    {
        $input = $request->all();

        $cita = $this->citaRepository->create($input);

        return $this->sendResponse($cita->toArray(), 'Cita saved successfully');
    }

    /**
     * Display the specified cita.
     * GET|HEAD /citas/{id}
     */
    public function show($id): JsonResponse
    {
        /** @var cita $cita */
        $cita = $this->citaRepository->find($id);

        if (empty($cita)) {
            return $this->sendError('Cita not found');
        }

        return $this->sendResponse($cita->toArray(), 'Cita retrieved successfully');
    }

    /**
     * Update the specified cita in storage.
     * PUT/PATCH /citas/{id}
     */
    public function update($id, UpdatecitaAPIRequest $request): JsonResponse
    {
        $input = $request->all();

        /** @var cita $cita */
        $cita = $this->citaRepository->find($id);

        if (empty($cita)) {
            return $this->sendError('Cita not found');
        }

        $cita = $this->citaRepository->update($input, $id);

        return $this->sendResponse($cita->toArray(), 'cita updated successfully');
    }

    /**
     * Remove the specified cita from storage.
     * DELETE /citas/{id}
     *
     * @throws \Exception
     */
    public function destroy($id): JsonResponse
    {
        /** @var cita $cita */
        $cita = $this->citaRepository->find($id);

        if (empty($cita)) {
            return $this->sendError('Cita not found');
        }

        $cita->delete();

        return $this->sendSuccess('Cita deleted successfully');
    }
}
