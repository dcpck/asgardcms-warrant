<div class="box-body">
    <div class='form-group{{ $errors->has("{$lang}[name]") ? ' has-error' : '' }}'>
        {!! Form::label("{$lang}[name]", trans('warrant::types.form.name')) !!}
        {!! Form::text("{$lang}[name]", Input::old("{$lang}[name]"), ['class' => "form-control slugify", 'placeholder' => trans('warrant::types.form.name')]) !!}
        {!! $errors->first("{$lang}[name]", '<span class="help-block">:message</span>') !!}
    </div>
    <div class='form-group{{ $errors->has("{$lang}[slug]") ? ' has-error' : '' }}'>
       {!! Form::label("{$lang}[slug]", trans('warrant::types.form.slug')) !!}
       {!! Form::text("{$lang}[slug]", Input::old("{$lang}[slug]"), ['class' => 'form-control slug', 'placeholder' => trans('warrant::types.form.slug')]) !!}
       {!! $errors->first("{$lang}[slug]", '<span class="help-block">:message</span>') !!}
   </div>
    <div class='form-group{{ $errors->has("{$lang}[sction]") ? ' has-error' : '' }}'>
       {!! Form::label("{$lang}[section]", trans('warrant::types.form.section')) !!}
       {!! Form::text("{$lang}[section]", Input::old("{$lang}[slug]"), ['class' => 'form-control section', 'placeholder' => trans('warrant::types.form.section')]) !!}
       {!! $errors->first("{$lang}[section]", '<span class="help-block">:message</span>') !!}
   </div>
</div>
