<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'ชื่อ' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($member->name) ? $member->name : ''}}">
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'เบอร์โทรศัพท์' }}</label>
    <input class="form-control" style="color:black;" readonly name="email" type="text" id="email" style="color: white;" value="{{ isset($member->email) ? $member->email : ''}}">
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('time') ? 'has-error' : ''}}">
    <label for="time" class="control-label">{{ 'ระยะเวลาสมาชิก' }}</label>
    <input class="form-control" name="time" type="text" id="time" value="{{ isset($member->time) ? $member->time : ''}}">
    {!! $errors->first('time', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('created_at') ? 'has-error' : ''}}">
    <label for="created_at" class="control-label">{{ 'วันที่สมัคร' }}</label>
    <input class="form-control" name="created_at" type="text" id="created_at" value="{{ isset($member->created_at) ? $member->created_at : ''}}">
    {!! $errors->first('created_at', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
    <label for="status" class="control-label">{{ 'สถานะ' }}</label>
    <select name="status" class="form-control" id="status">
        @foreach (json_decode('{"pending": "pending", "enable": "enable", "disabled": "disabled"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($member->status) && $member->status == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
        @endforeach
    </select>
    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('type') ? 'has-error' : ''}}">
    <label for="type" class="control-label">{{ 'ระดับ' }}</label>
    <select name="type" class="form-control" id="type">
        @foreach (json_decode('{"member": "member", "admin": "admin"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($member->type) && $member->type == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
        @endforeach
    </select>
    {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn-primary btn-sm" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
