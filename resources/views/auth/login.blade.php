<x-main-layout>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 mx-auto">
                <form class="mt-5" action="/login" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label" style="color: white">Email</label>
                        <input name="email" type="email" class="form-control" id="email">
                    </div>
                    @error('email') <span class="text-danger"> {{$message}}</span>
                    @enderror
                    <div class="mb-3">
                        <label for="password" class="form-label"style="color: white">Password</label>
                        <input name="password" type="password" class="form-control" id="password">
                    </div>
                    @error('password') <span class="text-danger"> {{$message}}</span>
                    @enderror
                    <button type="submit" class="btn btn-success">Login</button>
                </form>
            </div>
        </div>
    </div>

</x-main-layout>
