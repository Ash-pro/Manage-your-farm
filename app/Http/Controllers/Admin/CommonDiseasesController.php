<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyCommonDiseaseRequest;
use App\Http\Requests\StoreCommonDiseaseRequest;
use App\Http\Requests\UpdateCommonDiseaseRequest;
use App\Models\CommonDisease;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class CommonDiseasesController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('common_disease_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $commonDiseases = CommonDisease::with(['media'])->get();

        return view('admin.commonDiseases.index', compact('commonDiseases'));
    }

    public function create()
    {
        abort_if(Gate::denies('common_disease_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.commonDiseases.create');
    }

    public function store(StoreCommonDiseaseRequest $request)
    {
        $commonDisease = CommonDisease::create($request->all());

        if ($request->input('image', false)) {
            $commonDisease->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $commonDisease->id]);
        }

        return redirect()->route('admin.common-diseases.index');
    }

    public function edit(CommonDisease $commonDisease)
    {
        abort_if(Gate::denies('common_disease_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.commonDiseases.edit', compact('commonDisease'));
    }

    public function update(UpdateCommonDiseaseRequest $request, CommonDisease $commonDisease)
    {
        $commonDisease->update($request->all());

        if ($request->input('image', false)) {
            if (!$commonDisease->image || $request->input('image') !== $commonDisease->image->file_name) {
                if ($commonDisease->image) {
                    $commonDisease->image->delete();
                }
                $commonDisease->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($commonDisease->image) {
            $commonDisease->image->delete();
        }

        return redirect()->route('admin.common-diseases.index');
    }

    public function show(CommonDisease $commonDisease)
    {
        abort_if(Gate::denies('common_disease_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.commonDiseases.show', compact('commonDisease'));
    }

    public function destroy(CommonDisease $commonDisease)
    {
        abort_if(Gate::denies('common_disease_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $commonDisease->delete();

        return back();
    }

    public function massDestroy(MassDestroyCommonDiseaseRequest $request)
    {
        CommonDisease::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('common_disease_create') && Gate::denies('common_disease_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new CommonDisease();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
