<body>
{{ Form::model($site, array('route' => array('site.update', $site->id))) }}
<h1>Username</h1>
{{ Form::text('username') }}
 
<h1>Email</h1>
{{ Form::label('email', 'E-Mail Address') }}
{{ Form::text('email', 'Your email') }}


<h1>File</h1>
{{ Form::file('image') }}

<h1>Select</h1>
{{ Form::select('Network', array(
  'facebook' => 'Facebook',
  'twitter' => 'Twitter'
)) }}

<h1>Submit</h1>
{{ Form::submit('Register') }}


{{ Form::close() }}
</body>