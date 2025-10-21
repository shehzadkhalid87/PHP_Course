<div>
    <p>
        {{$job->title}}
    </p>
    <p>
        {{ $job->employer->name}} Created a new job.
    </p>
    <p>
        <a href="{{url('jobs/' . $job->id)}}">View your jobs.</a>
    </p>
</div>
