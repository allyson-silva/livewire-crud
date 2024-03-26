<div>

    <button  wire:navigate class="btn btn-success" href="/customers/create/">Create</button>
     <p>
    <livewire:flash-message />
     </p>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($customers as $c )

            <tr>
                <th scope="row">{{ $c->id }}</th>
                <td>{{ $c->name }}</td>
                <td>{{ $c->email }}</td>
                <td>{{ $c->phone }}</td>
                <td>
                    <button wire:navigate href="/customers/{{ $c->id }}" class="btn btn-primary btn-sm">View</button>
                    <button wire:navigate href="/customers/{{ $c->id }}/edit" class="btn btn-secondary btn-sm">Edit</button>
                    <button wire:click='delete({{ $c->id }})' class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>

            @endforeach


        </tbody>
    </table>
</div>
