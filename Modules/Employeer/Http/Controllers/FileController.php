<?php

namespace Modules\Employeer\Http\Controllers;

use App\Http\Resources\DataResource;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Routing\Controller;
use Modules\Core\Entities\File;
use Modules\Core\Entities\Vacancy;
use Modules\Employeer\Http\Requests\file\FileCreateRequest;
use Modules\Employeer\Http\Requests\file\FileUpdateRequest;
use Spatie\QueryBuilder\QueryBuilder;

class FileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
        $this->middleware('employee.check');
    }

    /**
     * Display a listing of the resource.
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        $files = QueryBuilder::for(File::class)
            ->paginate(100);
        return DataResource::collection($files);
    }

    /**
     * Store a newly created resource in storage.
     * @param fileCreateRequest $request
     * @return DataResource
     */
    public function store(fileCreateRequest $request): DataResource
    {
        $id = File::create($request->validated());
        return new DataResource($id);
    }

    /**
     * Show the specified resource.
     * @param File $id
     * @return DataResource
     */
    public function show(File $id): DataResource
    {
        $file = Vacancy::whereId($id->id)->firstOrFail();
        return new DataResource($file);
    }

    /**
     * Update the specified resource in storage.
     * @param fileUpdateRequest $request
     * @param File $file
     * @return DataResource
     */
    public function update(fileUpdateRequest $request, File $file): DataResource
    {
        $file->update($request->validated());
        return new DataResource($file);
    }


    /**
     * Remove the specified resource from storage.
     * @param File $file
     * @return DataResource
     */
    public function destroy(File $file): DataResource
    {
        $file->delete();
        return new DataResource($file);
    }

}
