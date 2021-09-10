<?php

namespace Modules\User\Http\Controllers;

use App\Http\Resources\DataResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Routing\Controller;
use Modules\Core\Entities\File;
use Modules\Core\Entities\Vacancy;
use Spatie\QueryBuilder\QueryBuilder;

class FileController extends Controller
{
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
     * Show the specified resource.
     * @param File $id
     * @return DataResource
     */
    public function show(File $id): DataResource
    {
        $file = Vacancy::whereId($id->id)->firstOrFail();
        return new DataResource($file);
    }
}
