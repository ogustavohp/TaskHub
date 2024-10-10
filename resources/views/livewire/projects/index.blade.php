<div class="grid grid-cols-2 gap-4 ">
  @foreach ($this->projects as $project)
    <a class="h-full" href="{{ route('projects.show', $project) }}">
      <x-projects.simple-card :$project />
    </a>
  @endforeach
</div>
