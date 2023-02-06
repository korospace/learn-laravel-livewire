<div>
    <form action="" wire:submit.prevent="update">
        <input type="hidden" name="id" wire:model="idContact">

        <div class="row">
            <div class="col">
              <input 
                name="name" 
                type="text" 
                wire:model="name" 
                class="form-control @error('name') is-invalid @enderror" 
                placeholder="name" aria-label="name">
              @error('name')
                <span class="invalid-feedback">{{ $message }}</span>
              @enderror
            </div>
            <div class="col">
              <input
                name="number" 
                type="text" 
                wire:model="number" 
                class="form-control @error('number') is-invalid @enderror" 
                placeholder="number" aria-label="number">
              @error('number')
                <span class="invalid-feedback">{{ $message }}</span>
              @enderror
            </div>
        </div>

        <div class="d-flex mt-4">
            <button class="btn btn-success d-flex align-items-center me-2">
                <div 
                  class="me-2" 
                  wire:loading wire:target="update">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; display: block; shape-rendering: auto;" width="20px" height="20px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                        <circle cx="50" cy="50" fill="none" stroke="#ffff" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138">
                        <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="0.5952380952380952s" values="0 50 50;360 50 50" keyTimes="0;1"></animateTransform>
                        </circle>
                    </svg>
                </div>
                <div class="pb-1">
                    update
                </div>
            </button>
    
            <button class="btn btn-secondary" wire:click.prevent="$emit('hideUpdateForm')">
                cancle
            </button>
        </div>
    </form>

    <hr>
</div>
