<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Support;

class SupportController extends Controller
{
  public function index()
  {

    $supports = Support::all();

      return view('admin/support/index', compact('supports'));
  }
  public function show($id)
  {
    if (!$support = Support::find($id))
      return redirect()->back();

    return view('admin/support/show', compact('support'));
  }

  public function create()
  {
      return view('admin/support/create');
  }

  public function store (Request $request, Support $support)
  { 
    $data = $request->all();
    $data['status'] = 'a';

    $support->create($data);

    return redirect(route('support.index'));

  } 

  public function edit(Support $support, $id)
  {
    if (!$support = Support::where('id',$id)->first())
    return redirect()->back();
    return view('admin/support/edit', compact('support'));
  }

  public function update(Request $request, Support $support, $id)
  {
    if (!$support = Support::find($id))
    return redirect()->back();

    $support->update($request->only([
      'subject',
      'body'
    ]));

    return redirect(route('support.index'));
  }

  public function destroy($id)
  {
    if (!$support = Support::find($id))
    return redirect()->back();

    $support->delete();

    return redirect(route('support.index'));
  }
}
