<div>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4">Crea articolo</h1>
            </div>

            

            <div class="container">
                
                <div class="row justify-content-center">
    
                    <div class="col-12 col-md-6">

                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
        
                        <form enctype="multipart/form-data" wire:submit="store">
        
                            <div class="mb-3">
                              <label for="title" class="form-label">Titolo*</label>
                              <input wire:model.blur="title" type="text" class="form-control" id="title">
                              <div class="text-danger">@error('title') {{ $message }} @enderror</div>
                            </div>

                            <div class="mb-3">
                                <label for="subtitle" class="form-label">Sottotitolo*</label>
                                <input wire:model.blur="subtitle" type="text" class="form-control" id="subtitle">
                              <div class="text-danger">@error('subtitle') {{ $message }} @enderror</div>
                            </div>

                            <div class="mb-3">
                                <label for="body" class="form-label">Corpo dell'articolo*</label>
                                <textarea wire:model.blur="body" class="form-control" id="body" cols="30" rows="10"></textarea>
                              <div class="text-danger">@error('body') {{ $message }} @enderror</div>

                            </div>

                            <div class="mb-3">
                                <label for="img" class="form-label">Carica un'immagine</label>
                                <input wire:model="img" type="file" class="form-control" id="img">
                            </div>

        
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
        
                    </div>
    
                </div>

            </div>



        </div>
    </div>
</div>
