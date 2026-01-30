<x-layouts.layout>
    <div class="overflow-x-auto">
        <table class="table">
            <!-- head -->
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
                        <td><button class="btn btn-warning">{{__("Modificar")}}</button></td>
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
