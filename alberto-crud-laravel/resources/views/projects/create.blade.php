<x-layouts.layout>
    <form action="{{ route('projects.store') }}" method="POST"
          class="flex flex-col gap-5 p-20">
        @csrf

        <div class="flex items-center gap-5">
            <a href="{{route("projects-list")}}"><kbd class="kbd">◀︎</kbd></a>
            <h1 class="text-3xl">{{__("Crear proyecto")}}</h1>
        </div>

        <label class="w-full input">
            <span class="label">{{__("Nombre")}}</span>
            <input type="text" name="name">
        </label>
        <div class="w-full">
            <label class="w-full label">{{__("Descripción")}}</label>
            <textarea class="w-full h-50 textarea" name="description"></textarea>
        </div>
        <label class="w-full input">
            <span class="label">{{__("Fecha de creación")}}</span>
            <input type="text" name="creation_date">
        </label>
        <label class="w-full input">
            <span class="label">{{__("Fecha de finalización")}}</span>
            <input type="text" name="end_date">
        </label>

        <button type="submit" class="btn btn-success">Guardar cambios</button>
    </form>
</x-layouts.layout>
