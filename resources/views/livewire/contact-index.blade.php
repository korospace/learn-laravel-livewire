<div>
    <div class="card-header">
        {{ $title }}
    </div>
      
    <div class="card-body">
        <table class="table text-center align-middle">
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
                        <button class="btn btn-info">
                            edit
                        </button>
                        <button class="btn btn-danger">
                            delete
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <ul>
        </ul>
    </div>

</div>
