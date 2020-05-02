<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ 'แพ็คเกจ' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($package->title) ? $package->title : ''}}">
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('days') ? 'has-error' : ''}}">
    <label for="days" class="control-label">{{ 'จำนวนวัน' }}</label>
    <input class="form-control" name="days" type="number" id="days" value="{{ isset($package->days) ? $package->days : ''}}">
    {!! $errors->first('days', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
    <label for="status" class="control-label">{{ 'Status' }}</label>
    <select name="status" class="form-control" id="status">
        @foreach (json_decode('{"active": "active", "inactive": "inactive"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($package->status) && $package->status == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
        @endforeach
    </select>
    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    <input class="btn btn-primary btn-sm" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Add Package' }}">
</div>