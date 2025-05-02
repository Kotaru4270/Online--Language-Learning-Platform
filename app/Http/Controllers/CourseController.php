<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function create()
    {
        return view('courses.add-course');
    }

    // Store new course in the database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'instructor' => 'required|string',
            'price' => 'required|numeric',
            'overview' => 'required|string',
            'thumbnail' => 'required|image',
            'episodes.*.title' => 'required|string',
            'episodes.*.description' => 'required|string',
            'episodes.*.thumbnail' => 'nullable|image',
            'episodes.*.video' => 'nullable|file|mimes:mp4,avi,mov',
        ]);

        $course = Course::create([
            'title' => $request->title,
            'instructor' => $request->instructor,
            'price' => $request->price,
            'overview' => $request->overview,
            'thumbnail' => $request->file('thumbnail')->store('thumbnails'),
        ]);

        // Store episodes
        foreach ($request->episodes as $episode) {
            $course->episodes()->create([
                'title' => $episode['title'],
                'description' => $episode['description'],
                'thumbnail' => $episode['thumbnail'] ? $episode['thumbnail']->store('episode_thumbnails') : null,
                'video' => $episode['video'] ? $episode['video']->store('episode_videos') : null,
            ]);
        }

        return redirect()->route('courses.index');
    }
}
