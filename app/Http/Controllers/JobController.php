<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public $jobs = [
        [
            'id' => 1,
            'title' => 'Laravel Developer',
            'location' => 'İstanbul',
        ],
        [
            'id' => 2,
            'title' => 'Flutter Developer',
            'location' => 'Ankara',
        ],
        [
            'id' => 3,
            'title' => 'React Developer',
            'location' => 'İzmir',
        ],
    ];
    public function index()
    {
        $jobs = Job::with('employer')->latest()->paginate(5);
        return view('jobs.jobs', [
            'title' => 'İş İlanları',
            'description' => 'Mevcut iş ilanları listesi',
            'jobs' => $jobs
        ]);
    }

    public function createPage()
    {
        return view('jobs.create');
    }

    public function show($id)
    {
        $job = collect($this->jobs)->firstWhere('id', $id);

        if (!$job) {
            abort(404, 'İş ilanı bulunamadı.');
        }

        return view('jobs.job', [
            'job' => $job,
        ]);
    }

    public function create()
    {
        // dd(request()->all());

        request()->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'location' => ['required', 'min:3', 'max:255'],
        ]);

        Job::create([
            'title' => request('title'),
            'location' => request('location'),
            'employer_id' => 1,
        ]);

        return redirect('/j/jobs');
    }
}
