
  <div class="form-group">
	 {!! Form::label('item_name', 'Item: ') !!}
	 {!! Form::text('item_name', null, ['class' => 'form-control', 'placeholder' => 'Type the item here...']) !!}
  </div>

  <div class="form-group">
	 {!! Form::label('date_created', 'Date: ') !!}
	 {!! Form::input('date', 'date_created', date('Y-m-d'), ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
	 {!! Form::submit($submitBtnText, ['class' => 'form-control btn btn-xs btn-success']) !!}
  </div> 
