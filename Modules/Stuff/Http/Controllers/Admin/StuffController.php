<?php namespace Modules\Stuff\Http\Controllers\Admin;

use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Modules\Stuff\Entities\Stuff;
use Modules\Stuff\Repositories\StuffRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class StuffController extends AdminBaseController
{
    /**
     * @var StuffRepository
     */
    private $stuff;

    public function __construct(StuffRepository $stuff)
    {
        parent::__construct();

        $this->stuff = $stuff;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$stuffs = $this->stuff->all();

        return view('stuff::admin.stuffs.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('stuff::admin.stuffs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->stuff->create($request->all());

        flash()->success(trans('core::core.messages.resource created', ['name' => trans('stuff::stuffs.title.stuffs')]));

        return redirect()->route('admin.stuff.stuff.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Stuff $stuff
     * @return Response
     */
    public function edit(Stuff $stuff)
    {
        return view('stuff::admin.stuffs.edit', compact('stuff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Stuff $stuff
     * @param  Request $request
     * @return Response
     */
    public function update(Stuff $stuff, Request $request)
    {
        $this->stuff->update($stuff, $request->all());

        flash()->success(trans('core::core.messages.resource updated', ['name' => trans('stuff::stuffs.title.stuffs')]));

        return redirect()->route('admin.stuff.stuff.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Stuff $stuff
     * @return Response
     */
    public function destroy(Stuff $stuff)
    {
        $this->stuff->destroy($stuff);

        flash()->success(trans('core::core.messages.resource deleted', ['name' => trans('stuff::stuffs.title.stuffs')]));

        return redirect()->route('admin.stuff.stuff.index');
    }
}
