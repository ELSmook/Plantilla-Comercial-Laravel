<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    {{--{{ $saludo }}
    
    <select wire:model="seccionSeleccionada" id="seccion2" name="seccion" class="form-control @error('seccion') is-invalid @enderror">
                                    
                                    <option value="{{ $foto->seccion}}" selected> 
                                    {{  $foto->seccion }}
                                    </option>
                                    
                                    @foreach ($secciones as $seccion)
                                        
                                        @if ($foto->seccion != $seccion->nombre)
                                            <option value="{{$seccion->nombre}}"> {{$seccion->nombre}}</option>
                                        @endif
                                            
                                    @endforeach

                                </select>
                                @error('seccion')
                                    <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror--}}


    {{--<p>El saludo actual es: {{ $saludo1 }}</p>

    <select wire:change="Cambio($event.target.value)" class="form-control">
        <option value="hola">Hola</option>
        <option value="chau">Chau</option>
        <option value="buenas">Buenas</option>
    </select>
    3 {{ $seccionSeleccionada }}
    --}}
{{-- $foto->seccion  --}}
    {{ $seccionSeleccionada }} <br>
    --Cambiar la sección-- <br>
    <select wire:change="Cambiar($event.target.value)" id="seccion2" name="seccion" class="form-control-md @error('seccion') is-invalid @enderror">
        <option value="" selected disabled>-- Seleccione una sección --</option>
        <option value="{{ $seccionSeleccionada }}" selected>
            {{ $seccionSeleccionada }}
        </option>
        @foreach ($secciones as $seccion)
            
            @if ($seccionSeleccionada !=$seccion->nombre)
                <option value="{{$seccion->nombre}}"> {{$seccion->nombre}}</option>
            @endif

        @endforeach

    </select>

    
</div>
