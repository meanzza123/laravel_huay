
<div class="form-group {{ $errors->has('tel') ? 'has-error' : ''}}">
    <label for="tel" class="control-label">{{ 'เบอร์โทร' }}</label>
    <input class="form-control" name="tel" type="text" id="tel" required value="{{ isset($addtime->tel) ? $addtime->tel : ''}}" >
    {!! $errors->first('tel', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('time') ? 'has-error' : ''}}">
    <label for="time" class="control-label">{{ 'เวลา/วัน' }}</label>
    <input class="form-control" name="time" type="number" required id="time" autocomplete="off" value="{{ isset($addtime->time) ? $addtime->time : ''}}" >
    {!! $errors->first('time', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary btn-sm" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Add Time' }}">
</div>
