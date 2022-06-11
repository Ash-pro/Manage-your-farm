<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyAgriculturalProjectRequest;
use App\Http\Requests\StoreAgriculturalProjectRequest;
use App\Http\Requests\UpdateAgriculturalProjectRequest;
use App\Models\AgriculturalProject;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgriculturalProjectsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('agricultural_project_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $agriculturalProjects = AgriculturalProject::all();

        return view('admin.agriculturalProjects.index', compact('agriculturalProjects'));
    }

    public function create()
    {
        abort_if(Gate::denies('agricultural_project_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.agriculturalProjects.create');
    }

    public function store(StoreAgriculturalProjectRequest $request)
    {
        $agriculturalProject = AgriculturalProject::create($request->all());

        return redirect()->route('admin.agricultural-projects.index');
    }

    public function edit(AgriculturalProject $agriculturalProject)
    {
        abort_if(Gate::denies('agricultural_project_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.agriculturalProjects.edit', compact('agriculturalProject'));
    }

    public function update(UpdateAgriculturalProjectRequest $request, AgriculturalProject $agriculturalProject)
    {
        $agriculturalProject->update($request->all());

        return redirect()->route('admin.agricultural-projects.index');
    }

    public function show(AgriculturalProject $agriculturalProject)
    {
        abort_if(Gate::denies('agricultural_project_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.agriculturalProjects.show', compact('agriculturalProject'));
    }

    public function destroy(AgriculturalProject $agriculturalProject)
    {
        abort_if(Gate::denies('agricultural_project_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $agriculturalProject->delete();

        return back();
    }

    public function massDestroy(MassDestroyAgriculturalProjectRequest $request)
    {
        AgriculturalProject::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
