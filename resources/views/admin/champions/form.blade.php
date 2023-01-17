<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($champion->title) ? $champion->title : ''}}" >
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
    <label for="content" class="control-label">{{ 'Challenge' }}</label>
    <textarea class="form-control" rows="5" name="content" type="textarea" id="content" >{{ isset($champion->content) ? $champion->content : ''}}</textarea>
    {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('category') ? 'has-error' : ''}}">
    <label for="category" class="control-label">{{ 'Category' }}</label>
    <select name="category" class="form-control" id="category" >
    @foreach (json_decode('{"singer": "Singer", "dancer": "Dancer", "actor": "Actor"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($champion->category) && $champion->category == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('category', '<p class="help-block">:message</p>') !!}
</div>

 <div class="form-group">
                            <div class="form-file">
                        <input type="file" name="image" value="{{ isset($champion->image) ? $champion->image : ''}}">
                             
                            </div>


                             


                          </div>



<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
