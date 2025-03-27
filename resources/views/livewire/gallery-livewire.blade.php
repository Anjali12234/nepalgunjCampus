<form wire:submit.prevent="save">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="form-group">
        <label for="title">Title</label>
        <input id="title" type="text" class="form-control" wire:model="title">
        @error('title')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
   
    <div class="pt-5">
        <label class="font-bold">Gallery Photo</label>
        @foreach ($galleryPhotos as $index => $galleryPhoto)
            <div class="col-md-12 row">
                <div class="col-md-6 mb-4">
                    <label for="">Title</label>
                    <input type="text" wire:model="galleryPhotos.{{ $index }}.title" class="form-control">
                </div>

                <div class="col-md-6 mb-4">
                    <label for="">Image</label>
                    <input type="file" wire:model="galleryPhotos.{{ $index }}.image" class="form-control">
                </div>
            </div>
            

            <button type="button" wire:click="removeGalleryPhoto({{ $index }})"
                class="btn btn-danger ml-2">Remove Image</button>
        @endforeach

        <button type="button" wire:click="addGalleryPhoto" class="btn btn-primary mt-2">Add Image</button>
    </div>


    <button type="submit" class="btn btn-success mt-3">Save</button>
</form>
