<x-layouts.layout>
<form action="{{ route('projects.update', $project->id) }}" method="POST"
      class="flex flex-col gap-5 p-20">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $project->name }}">
    <input type="text" name="description" value="{{ $project->description }}">
    <input type="text" name="creation_date" value="{{ $project->creation_date }}">
    <input type="text" name="end_date" value="{{ $project->end_date }}">

    <button type="submit" class="btn btn-success">Guardar cambios</button>
</form>
</x-layouts.layout>
