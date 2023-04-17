<!-- Create Modal -->
<div class="modal fade" id="editModal{{ $row->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('user-detail.update', $row->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $row->name }}" placeholder="Name">
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="surname">Surname</label>
                    <input type="text" class="form-control" name="surname" value="{{old('surname')}}" placeholder="Surname">
                    @error('surname')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" value="{{old('email')}}" placeholder="Email">
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="address" value="{{ $row->address }}" placeholder="Address">
                </div>
                <div class="form-group">
                    <label for="phone_number">Phone Number</label>
                    <input type="text" class="form-control" name="phone_number" value="{{ old('phone_number') }}" placeholder="Phone Number">
                </div>
                <div class="d-flex gap-1">
                    <div class="form-group w-100">
                        <label for="date">Date</label>
                        <input type="date" class="form-control" name="date" value="{{old('date')}}">
                        @error('date')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group w-100">
                        <label for="date">Time</label>
                        <input type="time" class="form-control" name="time" value="{{old('date')}}">
                    </div>
                </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
      </div>
    </div>
  </div>
@yield('editModal')