<?php namespace Modules\Warrant\Http\Controllers\Admin;

use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Modules\Warrant\Entities\Types;
use Modules\Warrant\Repositories\TypesRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class TypesController extends AdminBaseController
{
    /**
     * @var TypesRepository
     */
    private $types;

    public function __construct(TypesRepository $types)
    {
        parent::__construct();

        $this->types = $types;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $types = $this->types->all();

        return view('warrant::admin.types.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('warrant::admin.types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->types->create($request->all());

        flash()->success(trans('core::core.messages.resource created', ['name' => trans('warrant::types.title.types')]));

        return redirect()->route('admin.warrant.types.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Types $types
     * @return Response
     */
    public function edit(Types $types)
    {
        return view('warrant::admin.types.edit', compact('types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Types $types
     * @param  Request $request
     * @return Response
     */
    public function update(Types $types, Request $request)
    {
        $this->types->update($types, $request->all());

        flash()->success(trans('core::core.messages.resource updated', ['name' => trans('warrant::types.title.types')]));

        return redirect()->route('admin.warrant.types.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Types $types
     * @return Response
     */
    public function destroy(Types $types)
    {
        $this->types->destroy($types);

        flash()->success(trans('core::core.messages.resource deleted', ['name' => trans('warrant::types.title.types')]));

        return redirect()->route('admin.warrant.types.index');
    }
}
