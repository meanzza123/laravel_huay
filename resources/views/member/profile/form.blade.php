<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'ชื่อ' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset(Auth::user()->name) ? Auth::user()->name : ''}}">
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'เบอร์โทรศัพท์' }}</label>
    <input class="form-control" style="color:black;" readonly name="email" type="text" id="email" style="color: white;" value="{{ isset(Auth::user()->email) ? Auth::user()->email : ''}}">
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<!-- <div class="form-group {{ $errors->has('time') ? 'has-error' : ''}}">
    <label for="time" class="control-label">{{ 'ระยะเวลาสมาชิก' }}</label>
    <input class="form-control" name="time" type="text" id="time" value="{{ isset(Auth::user()->time) ? Auth::user()->time : ''}}">
    {!! $errors->first('time', '<p class="help-block">:message</p>') !!}
</div> -->

<div class="form-group">
    <input class="btn-primary btn-sm" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
