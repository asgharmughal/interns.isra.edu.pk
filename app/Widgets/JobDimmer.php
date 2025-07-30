<?php

namespace App\Widgets;

use App\Job;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Widgets\BaseDimmer;

class JobDimmer extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count =  Job::count();
        $oName = "Job";
        $oNamePlural = "jobs";

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-data',
            'title'  => "{$count} {$oName}",
            'text'   => "You have $count $oNamePlural in your database. Click on button below to view all $oNamePlural.",
            'button' => [
                'text' => "View all $oNamePlural",
                'link' => route('voyager.jobs.index'),
            ],
            'image' => asset('img/dimmer.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', app(Job::class));
    }
}