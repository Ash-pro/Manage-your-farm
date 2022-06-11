<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyRequestAServiceRequest;
use App\Http\Requests\StoreRequestAServiceRequest;
use App\Http\Requests\UpdateRequestAServiceRequest;
use App\Models\RequestAService;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RequestAServiceController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('request_a_service_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $requestAServices = RequestAService::all();

        return view('admin.requestAServices.index', compact('requestAServices'));
    }

    public function create()
    {
        abort_if(Gate::denies('request_a_service_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.requestAServices.create');
    }

    public function store(StoreRequestAServiceRequest $request)
    {
        $requestAService = RequestAService::create($request->all());

        return redirect()->route('admin.request-a-services.index');
    }

    public function edit(RequestAService $requestAService)
    {
        abort_if(Gate::denies('request_a_service_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.requestAServices.edit', compact('requestAService'));
    }

    public function update(UpdateRequestAServiceRequest $request, RequestAService $requestAService)
    {
        $requestAService->update($request->all());

        return redirect()->route('admin.request-a-services.index');
    }

    public function show(RequestAService $requestAService)
    {
        abort_if(Gate::denies('request_a_service_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.requestAServices.show', compact('requestAService'));
    }

    public function destroy(RequestAService $requestAService)
    {
        abort_if(Gate::denies('request_a_service_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $requestAService->delete();

        return back();
    }

    public function massDestroy(MassDestroyRequestAServiceRequest $request)
    {
        RequestAService::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
