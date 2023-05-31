

<h1>Nuevo Cliente</h1>

<form action="{{ route('cliente.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Telefono</label>
        <input type="text" class="form-control" id="phone" name="phone" >
    </div>
    <div class="mb-3">
        <label for="address" class="form-label">Direccion</label>
        <input type="text" class="form-control" id="address" name="address">
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Guardar</button>
    </div>
    
</form>


