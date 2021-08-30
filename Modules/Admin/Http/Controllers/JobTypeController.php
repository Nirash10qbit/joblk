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
    public function __construct()
    {
        $this->middleware('auth:sanctum');
        $this->middleware('admin.check');
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
