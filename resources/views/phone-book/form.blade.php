{!! Form::label('name', 'Name' , ['class'=>'form-label']) !!}
{!! Form::text('name', null, ['class'=>'form-control mb-3' . ($errors->has('name') ?' is-invalid': ''), 'placeholder'=>'Enter Full Name']) !!}

@error('name')
<p class="text-danger"><small>{{$message}}</small></p>
@enderror

{!! Form::label('phone', 'Phone' , ['class'=>'form-label']) !!}
{!! Form::text('phone', null, ['class'=>'form-control mb-3' . ($errors->has('phone') ?' is-invalid': ''), 'placeholder'=>'Enter Valid Phone Number']) !!}

@error('phone')
<p class="text-danger"><small>{{$message}}</small></p>
@enderror
