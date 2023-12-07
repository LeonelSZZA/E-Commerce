@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-white" style="background: #1C8A5F">
                        Perfil de Usuario
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img src="https://e7.pngegg.com/pngimages/799/987/png-clipart-computer-icons-avatar-icon-design-avatar-heroes-computer-wallpaper-thumbnail.png"
                                alt="Avatar" class="rounded-circle mb-3" width="100">
                        </div>

                        <label class="form-label">{{ __('Nombre') }}</label>
                        <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" required
                            autofocus>

                        <label class="form-label mt-3">{{ __('Correo Electrónico') }}</label>
                        <input type="text" class="form-control" name="email" value="{{ Auth::user()->email }}"
                            required>

                        <div class="d-grid gap-2 mt-4">
                            <button class="btn text-white mb-2" style="background: #1C8A5F">Actualizar Datos</button>
                            <button class="btn btn-danger">Eliminar Cuenta</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection
