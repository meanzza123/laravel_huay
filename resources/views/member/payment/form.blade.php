<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">

    <label for="name" class="control-label">{{ 'ชื่อ' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ Auth::User()->email }}">
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tel') ? 'has-error' : ''}}">
    <label for="tel" class="control-label">{{ 'เบอร์โทรศัพท์' }}</label>
    <input class="form-control" name="tel" type="text" id="tel" value="{{ Auth::User()->email}}">
    {!! $errors->first('tel', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('package') ? 'has-error' : ''}}">
    <label for="package" class="control-label">{{ 'แพ็คเก็จที่เลือก' }}</label>
    <select name="package" class="form-control" id="package">
        @foreach (json_decode('{"90": "90", "150": "150", "300": "300"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($payment->package) && $payment->package == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
        @endforeach
    </select>
    {!! $errors->first('package', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
<label for="package" class="control-label">{{ 'อัพโหลดรูป' }}</label>
    <div class="custom-file {{ $errors->has('image') ? 'has-error' : ''}}">
        <input type="file" class="custom-file-input" name="image" type="file" accept="image/*" id="image">
        <label class="custom-file-label" for="customFile">Choose file</label>
        {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
    </div>
</div>



<div class="form-group">
    <input class="btn btn-primary" type="submit" value="อัพโหลดข้อมูล">
</div>

<script type="text/javascript" src="{{ URL::asset('/assets/js/core/jquery.min.js') }}"></script>

<script>
    $(document).ready(function() {
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    });
</script>