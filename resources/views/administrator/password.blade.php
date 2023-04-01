<form class="col s12" action="/changepassword" method="POST">
    @csrf

    <div class="mb-3">
        <label for="current_password" class="form-label">
            <h6>Password Saat Ini</h6>
        </label>
        <input type="password" class="form-control" name="current_password">
        @error('current_password')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <div class="invalid-feedback">
            Please enter email
        </div>
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">
            <h6>Password Baru</h6>
        </label>
        <input type="password" class="form-control" name="password">
        @error('password')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <div class="invalid-feedback">
            Please enter email
        </div>
    </div>

    <div class="mb-3">
        <label for="password_confirmation" class="form-label">
            <h6>Konfirmasi Password Baru</h6>
        </label>
        <input type="password" class="form-control" name="password_confirmation">
        <div class="invalid-feedback">
            Please enter email
        </div>
    </div>



    <div class="mt-4">
        <button type="submit" class="btn btn-primary">Update Password</button>&nbsp
        <a href="/profil" class="btn btn-danger mb-10">Kembali</a>
    </div>

</form>
