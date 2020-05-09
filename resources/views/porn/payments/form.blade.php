<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($payment->name) ? $payment->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tel') ? 'has-error' : ''}}">
    <label for="tel" class="control-label">{{ 'Tel' }}</label>
    <input class="form-control" name="tel" type="text" id="tel" value="{{ isset($payment->tel) ? $payment->tel : ''}}" >
    {!! $errors->first('tel', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('time') ? 'has-error' : ''}}">
    <label for="time" class="control-label">{{ 'Time' }}</label>
    <input class="form-control" name="time" type="text" id="time" value="{{ isset($payment->time) ? $payment->time : ''}}" >
    {!! $errors->first('time', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('package') ? 'has-error' : ''}}">
    <label for="package" class="control-label">{{ 'Package' }}</label>
    <select name="package" class="form-control" id="package" >
    @foreach (json_decode('{"90": "90", "150": "150", "300": "300"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($payment->package) && $payment->package == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('package', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
    <label  class="control-label">  <i class="tim-icons icon-image-02" style="font-size: 40px;" aria-hidden="true" for="image"></i>  {{ 'อัพโหลดสลิป' }}</label>
   
    <input class="form-control" name="image" type="file" id="image" value="{{ isset($payment->image) ? $payment->image : ''}}" >
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>


