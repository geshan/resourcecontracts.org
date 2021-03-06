@extends('layout.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading"> Editing {{$contract->metadata->project_title}}</div>

        <div class="panel-body">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {!! Form::model($contract,['route' => array('contract.update', $contract->id) ,  'class'=>'form-horizontal contract-form', 'method'=>'PATCH',
            'files' => true]) !!}
            @include('contract.form', ['action'=>'edit', 'contact' => $contract])
            {!! Form::close() !!}
        </div>
    </div>
@stop