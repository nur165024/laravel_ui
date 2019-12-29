<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\AttributeContract;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AttributeController extends BaseController
{
    protected $attributeRepository;

    public function __construct(AttributeContract $attributeRepository)
    {
        $this->attributeRepository = $attributeRepository;
    }

    //attribute all list

    public function index(){
        $attributes = $this->attributeRepository->listAttributes();
        $this->setPageTitle('Attribute', 'List of all attribute');
        return view('admin.attribute.index', compact('attributes'));
    }

    //attribute create

    public function create(){
        $this->setPageTitle('Attribute', 'Create Attribute');
        return view('admin.attribute.create');
    }

    // attribute store

    public function store(Request $request){
        $this->validate($request, [
            'code'          =>  'required',
            'name'          =>  'required',
            'frontend_type' =>  'required'
        ]);

        $params = $request->except('_token');

        $attribute = $this->attributeRepository->createAttribute($params);

        if (!$attribute) {
            return $this->responseRedirectBack('Error occurred while creating attribute.', 'error', true, true);
        }
        return $this->responseRedirect('admin.attribute.index', 'Attribute added successfully' ,'success',false, false);
    }

    // attribute edit

    public function edit($id){
        $attribute = $this->attributeRepository->findAttributeById($id);
        $this->setPageTitle('Attribute', 'Edit Attribute : '.$attribute->name);
        return view('admin.attribute.edit', compact('attribute'));
    }

    //attribute update

    public function update(Request $request)
    {
        $this->validate($request, [
            'code'          =>  'required',
            'name'          =>  'required',
            'frontend_type' =>  'required'
        ]);

        $params = $request->except('_token');

        $attribute = $this->attributeRepository->updateAttribute($params);

        if (!$attribute) {
            return $this->responseRedirectBack('Error occurred while updating attribute.', 'error', true, true);
        }
        return $this->responseRedirect('admin.attribute.index', 'Attribute updated successfully' ,'success',false, false);
    }

    //attribute delete

    public function delete($id)
    {
        $attribute = $this->attributeRepository->deleteAttribute($id);

        if (!$attribute) {
            return $this->responseRedirectBack('Error occurred while deleting attribute.', 'error', true, true);
        }
        return $this->responseRedirect('admin.attribute.index', 'Attribute deleted successfully' ,'success',false, false);
    }
}
