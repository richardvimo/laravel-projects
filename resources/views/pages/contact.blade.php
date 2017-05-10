@extends('main')

@section('title', '| Contact')

@section('content')
        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal">
                  <fieldset>
                    <legend>Contact Me</legend>
                   
                    <div class="form-group">
                      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                      <div class="col-lg-10">
                        <input class="form-control" id="inputEmail" name="inputEmail" placeholder="Email" type="text">
                      </div>
                    </div>
                   
                    <div class="form-group">
                      <label for="inputSubject" class="col-lg-2 control-label">Password</label>
                      <div class="col-lg-10">
                        <input class="form-control" id="inputSubject" name="inputSubject" placeholder="Subject" type="text">
                      </div>
                    </div>
                   
                    <div class="form-group">
                      <label for="textAreaMessage" class="col-lg-2 control-label">Message</label>
                      <div class="col-lg-10">
                        <textarea class="form-control" rows="3" id="textAreaMessage" name="textAreaMessage"></textarea>
                        <span class="help-block">type tour message here...</span>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <div class="col-lg-10 col-lg-offset-2">
                        {!! Html::linkRoute('homepage', 'Cancel', null, array('class' => 'btn btn-default')) !!}
                        {{-- <button type="button" class="btn btn-default" onclick="{{ Redirect::to('/home') }}">Cancel</button> --}}
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                  </fieldset>
                </form>
            </div>
        </div>
@endsection