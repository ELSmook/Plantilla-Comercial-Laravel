<div>
    {{-- Do your work, then step back. --}}



    <select wire:model="Seleccion" id="seccion" name="seccion" class="form-control" >
        <option value="Fecha">Fecha</option>
        <option value="Presupuesto">Presupuesto</option>
        <option value="Otro"> Otro tipo de consulta</option>
    </select>

    <input type="text" class="form-control" name="subject" id="subject" value="{{ $Seleccion }}" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
    

</div>
