<?php

namespace Modules\User\Http\Controllers;

use App\Http\Resources\DataResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Routing\Controller;
use Modules\Core\Entities\Vacancy;
use Spatie\QueryBuilder\QueryBuilder;

class VacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        $vacancies = QueryBuilder::for(Vacancy::class)
            ->paginate(10);
        return DataResource::collection($vacancies);
    }


    /**
     * Show the specified resource.
     * @param Vacancy $id
     * @return DataResource
     */
    public function show(Vacancy $id): DataResource
    {
        Vacancy::whereId($id->id)->firstOrFail();
        return new DataResource($id);
    }
}
