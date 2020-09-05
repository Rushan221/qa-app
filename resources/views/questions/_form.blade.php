@csrf
<div class="form-group">
    <label for="title">{{__('Question title')}}</label>
    <input class="form-control {{$errors->has('title') ? 'is-invalid':''}}" name="title"
           placeholder="Enter question title" type="text" value="{{old('title',$question->title)}}">
    @if($errors->has('title'))
        <div class="invalid-feedback">
            <strong>{{$errors->first('title')}}</strong>
        </div>
    @endif
</div>
<div class="form-group">
    <label for="title">{{__('Explain your question')}}</label>
    <textarea name="body" rows="10"
              class="form-control {{$errors->has('body') ? 'is-invalid':''}}">{{old('body',$question->body)}}</textarea>
    @if($errors->has('body'))
        <div class="invalid-feedback">
            <strong>{{$errors->first('body')}}</strong>
        </div>
    @endif
</div>
<div class="form-group">
    <button type="submit"
            class="btn btn-outline-primary btn-lg">{{$buttonText}}</button>
</div>