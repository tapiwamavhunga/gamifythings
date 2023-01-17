<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ 'Title' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($challenge->title) ? $challenge->title : ''}}" >
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('challenge_brand') ? 'has-error' : ''}}">
    <label for="challenge_brand" class="control-label">{{ 'Challenge Brand' }}</label>
    <input class="form-control" name="challenge_brand" type="text" id="challenge_brand" value="{{ isset($challenge->challenge_brand) ? $challenge->challenge_brand : ''}}" >
    {!! $errors->first('challenge_brand', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group {{ $errors->has('challenge_link') ? 'has-error' : ''}}">
    <label for="challenge_link" class="control-label">{{ 'Challenge Link' }}</label>
    <input class="form-control" name="challenge_link" type="text" id="challenge_link" value="{{ isset($challenge->challenge_link) ? $challenge->challenge_link : ''}}" >
    {!! $errors->first('challenge_link', '<p class="help-block">:message</p>') !!}
</div>



<div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
    <label for="content" class="control-label">{{ 'Content' }}</label>
    <textarea class="form-control" rows="5" name="content" type="textarea" id="content" >{{ isset($challenge->content) ? $challenge->content : ''}}</textarea>
    {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group {{ $errors->has('termsconditions') ? 'has-error' : ''}}">
    <label for="content" class="control-label">{{ 'Terms and Conditions' }}</label>
    <textarea class="form-control" rows="5" name="termsconditions" type="textarea" id="termsconditions" >{{ isset($challenge->termsconditions) ? $challenge->termsconditions : ''}}</textarea>
    {!! $errors->first('termsconditions', '<p class="help-block">:message</p>') !!}
</div>



 <div class="form-group">
                            <div class="form-file">
                        <input type="file" name="image" value="{{ isset($challenge->image) ? $challenge->image : ''}}">
                             
                            </div>


                             


                          </div>



<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
