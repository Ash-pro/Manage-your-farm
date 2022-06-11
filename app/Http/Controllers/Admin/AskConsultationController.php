<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyAskConsultationRequest;
use App\Http\Requests\StoreAskConsultationRequest;
use App\Http\Requests\UpdateAskConsultationRequest;
use App\Models\AskConsultation;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AskConsultationController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('ask_consultation_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $askConsultations = AskConsultation::all();

        return view('admin.askConsultations.index', compact('askConsultations'));
    }

    public function create()
    {
        abort_if(Gate::denies('ask_consultation_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.askConsultations.create');
    }

    public function store(StoreAskConsultationRequest $request)
    {
        $askConsultation = AskConsultation::create($request->all());

        return redirect()->route('admin.ask-consultations.index');
    }

    public function edit(AskConsultation $askConsultation)
    {
        abort_if(Gate::denies('ask_consultation_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.askConsultations.edit', compact('askConsultation'));
    }

    public function update(UpdateAskConsultationRequest $request, AskConsultation $askConsultation)
    {
        $askConsultation->update($request->all());

        return redirect()->route('admin.ask-consultations.index');
    }

    public function show(AskConsultation $askConsultation)
    {
        abort_if(Gate::denies('ask_consultation_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.askConsultations.show', compact('askConsultation'));
    }

    public function destroy(AskConsultation $askConsultation)
    {
        abort_if(Gate::denies('ask_consultation_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $askConsultation->delete();

        return back();
    }

    public function massDestroy(MassDestroyAskConsultationRequest $request)
    {
        AskConsultation::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
