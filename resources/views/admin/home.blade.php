@extends('layouts.app')

@section('content')
<div class="container">
    <button type="button" class="btn btn-success mt-3" data-toggle="modal" data-target="#createUserModal">
        Registrar Usuario
    </button>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('Bienvenido, administrador!') }}

                    <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#cursoModal">Registrar Curso</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Incluir el modal -->
@include('admin.create_user_modal')
@include('cursos.form')
@endsection

@section('scripts')
<script>
function openCreateModal() {
    $('#modalTitle').text('Registrar Curso');
    $('#cursoForm').attr('action', '{{ route('cursos.store') }}');
    $('#cursoForm').trigger('reset');
    $('#curso_id').val('');
    $('#method').val('POST');
    $('#cursoModalLabel').text('Registrar Curso');
    $('#submitBtn').text('Registrar');
}
</script>
@endsection
