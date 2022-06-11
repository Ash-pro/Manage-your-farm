<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyOdersProtectRequest;
use App\Http\Requests\StoreOdersProtectRequest;
use App\Http\Requests\UpdateOdersProtectRequest;
use App\Models\OdersProtect;
use App\Models\Product;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class OdersProtectController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('oders_protect_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $odersProtects = OdersProtect::with(['product'])->get();

        $products = Product::get();

        return view('admin.odersProtects.index', compact('odersProtects', 'products'));
    }

    public function create()
    {
        abort_if(Gate::denies('oders_protect_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $products = Product::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.odersProtects.create', compact('products'));
    }

    public function store(StoreOdersProtectRequest $request)
    {
        $odersProtect = OdersProtect::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $odersProtect->id]);
        }

        return redirect()->route('admin.oders-protects.index');
    }

    public function edit(OdersProtect $odersProtect)
    {
        abort_if(Gate::denies('oders_protect_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $products = Product::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $odersProtect->load('product');

        return view('admin.odersProtects.edit', compact('odersProtect', 'products'));
    }

    public function update(UpdateOdersProtectRequest $request, OdersProtect $odersProtect)
    {
        $odersProtect->update($request->all());

        return redirect()->route('admin.oders-protects.index');
    }

    public function show(OdersProtect $odersProtect)
    {
        abort_if(Gate::denies('oders_protect_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $odersProtect->load('product');

        return view('admin.odersProtects.show', compact('odersProtect'));
    }

    public function destroy(OdersProtect $odersProtect)
    {
        abort_if(Gate::denies('oders_protect_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $odersProtect->delete();

        return back();
    }

    public function massDestroy(MassDestroyOdersProtectRequest $request)
    {
        OdersProtect::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('oders_protect_create') && Gate::denies('oders_protect_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new OdersProtect();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
