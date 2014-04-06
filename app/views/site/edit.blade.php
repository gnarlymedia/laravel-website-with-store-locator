<body>
{{ Form::model($site, array('route' => array('site.update', $site->id))) }}

<h1>Site</h1>
<p>{{ Form::text('name') }}</p>
<p>{{ Form::text('addressLine1') }}</p>
<p>{{ Form::text('addressLine2') }}</p>
<p>{{ Form::text('addressSuburb') }}</p>
<p>{{ Form::text('addressState') }}</p>
<p>{{ Form::text('addressPostcode') }}</p>
<p>{{ Form::text('openingHours') }}</p>
<p>{{ Form::text('phone') }}</p>
<p>{{ Form::text('fax') }}</p>
<p>{{ Form::text('modalities') }}</p>
 
<p>{{ Form::submit('Register') }}</p>

{{ Form::close() }}
</body>