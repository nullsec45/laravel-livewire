<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">
                Login
            </h5>

            <form wire:submit="login">
                <div class="mb-3 row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" wire:model="loginForm.email" class="form-control" id="email" name="email">
                        @error('loginForm.email')
                            <small class="d-block mt-1 text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>

             
                <div class="mb-3 row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                         <input type="password" wire:model="loginForm.password" class="form-control" id="password" name="password">
                          @error('loginForm.password')
                             <small class="d-block mt-1 text-danger">{{$message}}</small>
                         @enderror
                    </div>
                      
                </div>
               
                <button class="btn btn-primary float-end" type="submit">Login</button>
            </form>
        </div>
    </div>
</div>
