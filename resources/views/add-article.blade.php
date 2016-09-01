
@extends('layouts.app')

@section('content')
  <section id="add-form">
      <div class="container">
          <div class="row">

              <div class="col-lg-12">
                  <h2>Add Article</h2>
                
                  <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                   </ul>
                  
                  @if(Session::has('message'))
<p class="alert alert-info">{{ Session::get('message') }}</p>
                 @endif
                  
                  {!! Form::open(array('route' => 'create_article', 'class' => 'form')) !!}
                  
                  
                  
<div class="form-group">
    {!! Form::label('Article Title') !!}
    {!! Form::text('article_title', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Article Title')) !!}
</div>

<div class="form-group">
    {!! Form::label('Article Description') !!}
    {!! Form::text('article_description', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Article description')) !!}
</div>



<div class="form-group">
    {!! Form::submit('Post It!', 
      array('class'=>'btn btn-primary')) !!}
</div>
                  
                  
                  
                  {!! Form::close() !!}

              </div>

          </div>

      </div>

  </section>


@endsection

