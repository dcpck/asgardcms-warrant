<?php namespace Modules\Warrant\Http\Controllers\Admin;

use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Modules\Warrant\Entities\Acts;
use Modules\Warrant\Repositories\ActsRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class ActsController extends AdminBaseController
{
    /**
     * @var ActsRepository
     */
    private $acts;

    public function __construct(ActsRepository $acts)
    {
        parent::__construct();

        $this->acts = $acts;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $acts = $this->acts->all();

        return view('warrant::admin.acts.index', compact('acts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('warrant::admin.acts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->acts->create($request->all());

        flash()->success(trans('core::core.messages.resource created', ['name' => trans('warrant::acts.title.acts')]));

        return redirect()->route('admin.warrant.acts.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Acts $acts
     * @return Response
     */
    public function edit(Acts $acts)
    {
        return view('warrant::admin.acts.edit', compact('acts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Acts $acts
     * @param  Request $request
     * @return Response
     */
    public function update(Acts $acts, Request $request)
    {
        $this->acts->update($acts, $request->all());

        flash()->success(trans('core::core.messages.resource updated', ['name' => trans('warrant::acts.title.acts')]));

        return redirect()->route('admin.warrant.acts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Acts $acts
     * @return Response
     */
    public function destroy(Acts $acts)
    {
        $this->acts->destroy($acts);

        flash()->success(trans('core::core.messages.resource deleted', ['name' => trans('warrant::acts.title.acts')]));

        return redirect()->route('admin.warrant.acts.index');
    }
}
