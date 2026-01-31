<x-layouts.layout>
    <div class="overflow-x-auto">
        <a href="{{ route('projects.create') }}" class="btn btn-success w-full">
            <button>{{__("Crear proyecto")}}</button>
        </a>
        <table class="table">
            <thead>
            <tr>
                @foreach($fields as $field)
                    <td>{{$field}}</td>
                @endforeach
                <td>{{__("Modificar")}}</td>
                <td>{{__("Eliminar")}}</td>
            </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->description }}</td>
                        <td>{{ $project->creation_date }}</td>
                        <td>{{ $project->end_date }}</td>
                        <td>
                            <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-warning">
                                {{ __("Modificar") }}
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('projects.destroy', $project->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-error">
                                    {{__("Eliminar")}}
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layouts.layout>
