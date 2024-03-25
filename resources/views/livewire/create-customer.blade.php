<div class="card">
    <div class="card-header">
      Create Customer
    </div>
    <div class="card-body">
        <form wire:submit="save">
            <div class="form-group">
              <label for="exampleInputName1">Name</label>
              <input wire:model='name' type="text" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" placeholder="Enter name">
              <div>
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input wire:model='email' type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <div>
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
              </div>
            <div class="form-group">
              <label for="exampleInputPhone1">Phone</label>
              <input wire:model='phone' type="text" class="form-control" id="exampleInputPhone1" placeholder="Phone">
              <div>
                @error('phone')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <button wire:navigate class="btn btn-secondary" href="/customers">Back</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
  </div>
