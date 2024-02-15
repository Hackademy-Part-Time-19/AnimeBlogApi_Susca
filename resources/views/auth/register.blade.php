<x-main-layout>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mx-auto">
                <form class="mt-5" action="/register" method="POST">
                    @csrf
                    <h1>Registrati</h1>
                    <div class="mb-3">
                        <label for="name" class="form-label" style="color: white">Nome</label>
                        <input name="name" type="text" class="form-control" id="name">
                    </div>
                    @error ("name")
                    <p>{{$message}}</p>
                    @enderror
                    <div class="mb-3">
                        <label for="email" class="form-label" style="color: white">Email</label>
                        <input name="email" type="email" class="form-control" id="email">
                    </div>
                    @error ("email")
                    <p>{{$message}}</p>
                    @enderror
                    <div class="mb-3">
                        <label for="password" class="form-label" style="color: white">Password</label>
                        <input name="password" type="password" class="form-control" id="password">
                    </div>
                    @error ("password")
<p>{{$message}}</p>
@enderror
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label" style="color: white">Conferma password</label>
                        <input name="password_confirmation" type="password" class="form-control"
                            id="password_confirmation">
                    </div>

                    <button type="submit" class="btn btn-success">Register</button>
                </form>
            </div>
        </div>
    </div>

</x-main-layout>
