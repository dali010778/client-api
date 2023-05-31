<h1>Ver Cliente</h1>

<form action="{{ route('cliente.update') }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $cliente['id'] }}">
    <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $cliente['name'] }}">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ $cliente['email'] }}">
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Telefono</label>
        <input type="text" class="form-control" id="phone" name="phone" value="{{ $cliente['phone'] }}" >
    </div>
    <div class="mb-3">
        <label for="address" class="form-label">Direccion</label>
        <input type="text" class="form-control" id="address" name="address" value="{{ $cliente['address'] }}">
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Guardar</button>
    </div>
    
</form>