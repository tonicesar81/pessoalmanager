@extends('layouts.app')

@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('tarefas')}}">Tarefas</a></li>
            <li class="breadcrumb-item active" aria-current="page">Nova tarefa</li>
        </ol>
    </nav>
    <h5>Criando uma nova tarefa</h5>
    {!! Form::model('tarefas',['action' => 'TarefasController@store']) !!}
    <div class="form-row">
        <div class="form-group col-12">
            {!! Form::text('nome',null,['class' => 'form-control', 'placeholder' => 'Nome da tarefa'] ) !!}
        </div>
        <div class="form-group col-md-3">
            {!! Form::label('dtIni', 'Data de início') !!}
            {!! Form::date('dtIni', \Carbon\Carbon::now(), ['class' => 'form-control']); !!}
        </div>
        <div class="form-group col-md-3">
            {!! Form::label('horaIni', 'Início do período') !!}
            {!! Form::time('horaIni', Carbon\Carbon::now('America/Sao_Paulo')->format('H:i'), ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-md-3">
            {!! Form::label('horaFim', 'Término do período') !!}
            {!! Form::time('horaFim', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-md-3">
            {!! Form::label('dtFim', 'Data do término') !!}
            {!! Form::date('dtFim', null, ['class' => 'form-control']); !!}
        </div>
        <div class="form-group col-12">
            {!! Form::label('periodo', 'Período de repetição') !!}
            {!! Form::select('periodo', $periodo, null, ['placeholder' => 'Somente nesta data', 'class' => 'form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}
</div>
@endsection
