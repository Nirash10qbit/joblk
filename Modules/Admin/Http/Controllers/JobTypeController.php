<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Resources\DataResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Routing\Controller;
use Modules\Admin\Http\Requests\JobType\JobTypeCreateRequest;
use Modules\Admin\Http\Requests\JobType\JobTypeUpdateRequest;
use Modules\Core\Entities\JobType;
use Spatie\QueryBuilder\QueryBuilder;

class JobTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        $jobtypes = QueryBuilder::for(JobType::class)
            ->paginate(10);
        return DataResource::collection($jobtypes);
    }


    /**
     * Store a newly created resource in storage.
     * @param JobTypeCreateRequest $request
     * @return DataResource
     */
    public function store(JobTypeCreateRequest $request): DataResource
    {
        $jobtype = JobType::create($request->validated());
        return new DataResource($jobtype);
    }

    /**
     * Show the specified resource.
     * @param JobType $jobType
     * @return DataResource
     */
    public function show(JobType $jobType): DataResource
    {
        JobType::whereId($jobType->id)->firstOrFail();
        return new DataResource($jobType);
    }


    /**
     * Update the specified resource in storage.
     * @param JobTypeUpdateRequest $request
     * @param JobType $jobType
     * @return DataResource
     */
    public function update(JobTypeUpdateRequest $request, JobType $jobType)
    {
        $jobType->update($request->validated());
        return new DataResource($jobType);
    }

    /**
     * Remove the specified resource from storage.
     * @param JobType $jobType
     * @return DataResource
     */
    public function destroy(JobType $jobType): DataResource
    {
        $jobType->delete();
        return new DataResource($jobType);
    }
}
