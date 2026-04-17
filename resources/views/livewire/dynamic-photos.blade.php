<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
   <div wire:poll.20s>
    @foreach($fotos as $foto)
        <div class="carousel-item @if($loop->first) active @endif">
            <img src="{{ Storage::url($foto->imagen) }}" class="img-xl" alt="Foto ampliada">
        </div>
    @endforeach
</div>

    

</div>
