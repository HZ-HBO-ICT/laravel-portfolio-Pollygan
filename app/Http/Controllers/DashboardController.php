<?php

namespace App\Http\Controllers;

use App\Models\Grade;

class DashboardController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show()
    {
        $grades = Grade::all();
        return view('dashboard', [
            'grades' => $grades
        ]);
    }
}
