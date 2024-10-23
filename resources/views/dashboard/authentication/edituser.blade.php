@extends('dashboard\template')
@section('main_section')
<H2>Update User</H2>

    <form action="{{ route('users.update',  $user->id ) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input class="form-control form-control-md" type="text" name="name" value="{{ $user->name }}"
                placeholder="Enter your full name" />
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">Email</label>
                <input class="form-control form-control-md" type="email" name="email" value="{{ $user->email }}"
                    placeholder="Enter your email" />
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6">
                <label class="form-label">Password</label>
                <input class="form-control form-control-md" type="password" name="password" placeholder="Enter password" />
                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">Contact</label>
                <input class="form-control form-control-md" type="text" name="contact" value="{{ $user->contact }}"
                    placeholder="Enter your phone number" />
                @error('contact')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6">
                <label class="form-label">User Type</label>
            <select name="usertype" class="form-control form-control-md" required>
                <option>Select Option</option>
                <option value="Admin">Admin</option>
                <option value="User">User</option>
            </select>
            @error('usertype')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Address</label>
            <input class="form-control form-control-md" type="text" name="address" value="{{ $user->address }}"
                placeholder="Enter your address" />
            @error('address')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="text-center mt-3">
            <button type="submit" class="btn btn-lg btn-primary">Update</button>
        </div>
    </form>

@endsection

