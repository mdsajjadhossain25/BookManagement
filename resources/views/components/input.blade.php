<div class="mb-3">
    <label for="" class="form-label">{{$label}}</label>
    <input type="{{$type}}" name="{{$name}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
    <span class="text-danger">
        {{-- @error('name')
            {{$message}}
        @enderror --}}
    </span>
    <small id="helpId" class="text-muted">Help text</small>
</div>