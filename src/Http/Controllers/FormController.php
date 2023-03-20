<?php

namespace AlAmin\Form\Http\Controllers;

use AlAmin\Form\Models\Form;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function getFromBySlug($key) : \Illuminate\Http\JsonResponse
    {
        $keyName = config('form.get_by_key_name');

        $data = (new Form)->setTable(config('form.table_name'))->where($keyName, $key)->first();

        if(empty($data)) {
            return response()->json(['data' => []], 200);
        }

        $res = [
            'form_id'    => $data->form_id,
            'slug'       => $data->slug,
            'cache_key'  => $data->cache_key,
            'updated_at' => $data->updated_at,
            'data'       => json_decode($data->data),
        ];

        return response()->json(['data' => $res], 200);
    }

    /**
     * @throws \Illuminate\Validation\ValidationException
     */
    public function updateFromBySlug(Request $request) : \Illuminate\Http\JsonResponse
    {
        $this->validate($request, [
            'slug'      => 'required|string:250',
            'cache_key' => 'required|string:250',
            'data'      => 'required|json',
            'source'    => 'required|string:250',
            'form_id'   => 'required|int',
        ]);

        $data = (new Form)->setTable(config('form.table_name'))->updateOrCreate([
            'form_id' => $request->get('form_id'),
        ], [
            'slug'      => $request->get('slug'),
            'cache_key' => $request->get('cache_key'),
            'data'      => $request->get("data"),
            'source'    => $request->get('source'),
        ]);

        $res = [
            'form_id'    => $data->form_id,
            'slug'       => $data->slug,
            'cache_key'  => $data->cache_key,
            'updated_at' => $data->updated_at,
            'data'       => json_decode($data->data),
        ];

        return response()->json(['data' => $res], 201);
    }
}
