<div>
    {{-- Because she competes with no one, no one can compete with her. class="img-bg" wire:poll.20s --}}
    Tiempo para cada foto: {{ $pollTime }}
   <div wire:poll.{{$pollTime}}s>
        @foreach($fotos as $foto)
            <div class="carousel-item @if($loop->last) active @endif">
                <img src="{{ Storage::url($foto->imagen) }}" width="525px" height="525px" alt="Foto">
            </div>
        @endforeach
    </div>

    

</div>
