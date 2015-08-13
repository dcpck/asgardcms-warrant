<div class="box-body">
    <div class='form-group{{ $errors->has("{$lang}[name]") ? ' has-error' : '' }}'>
        {!! Form::label("{$lang}[name]", trans('warrant::acts.form.name')) !!}
        {!! Form::text("{$lang}[name]", Input::old("{$lang}[name]"), ['class' => "form-control slugify", 'placeholder' => trans('warrant::acts.form.name')]) !!}
        {!! $errors->first("{$lang}[name]", '<span class="help-block">:message</span>') !!}
    </div>
    <div class='form-group{{ $errors->has("{$lang}[slug]") ? ' has-error' : '' }}'>
       {!! Form::label("{$lang}[slug]", trans('warrant::acts.form.slug')) !!}
       {!! Form::text("{$lang}[slug]", Input::old("{$lang}[slug]"), ['class' => 'form-control slug', 'placeholder' => trans('warrant::acts.form.slug')]) !!}
       {!! $errors->first("{$lang}[slug]", '<span class="help-block">:message</span>') !!}
   </div>
</div>
