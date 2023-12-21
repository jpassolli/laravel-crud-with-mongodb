<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVideoRequest;
use App\Http\Requests\UpdateVideoRequest;
use App\Models\Video;

class VideoController extends Controller
{
    public function index()
    {
        $video = Video::all();
        return response()->json($video);
    }

    public function store(StoreVideoRequest $request)
    {
        $data = $request->validated();
        Video::create($data);
    }

    public function update(UpdateVideoRequest $request, Video $video)
    {
        $data = $request->validated();
        $video->update($data);
    }

    public function destroy(Video $video)
    {
        $video->delete();
    }
}
