<div>

    <div class="card shadow">
                
        <div class="card-header">
            {{ $title }}
        </div>
          
        <div class="card-body">

            <!-- Flash Message -->
            @if (session()->has('msgSuccess'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= session('msgSuccess') ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if ($isUpdate == false)
                {{-- <livewire:contact-create :contacts="$data"></livewire:contact-create> --}}
                <livewire:contact-create></livewire:contact-create>
            @else
                <livewire:contact-update></livewire:contact-update>
            @endif

            <div class="row d-flex justify-content-between">
                <div class="col-1">
                    <select wire:model="paginate" class="form-select">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                    </select>
                </div>
                <div class="col-3">
                    <input wire:model="search" type="text" class="form-control">
                </div>
            </div>

            <table class="table text-center align-middle mt-4">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Number</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1 ?>
                    @foreach ($data as $item)
                    <tr>
                        <th scope="row">{{ $no++ }}</th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->number }}</td>
                        <td>
                            <button class="btn btn-info" wire:click="showUpdateForm({{ $item->id }})">
                                edit
                            </button>
                            <button class="btn btn-danger" wire:click="delete({{ $item->id }})">
                                delete 
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $data->links() }}
        </div>

    </div>

</div>
