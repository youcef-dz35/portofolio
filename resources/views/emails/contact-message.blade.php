<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8" />
    <title>New Message</title>
  </head>
  <body>

    <h2>Test Email</h2>
    <p>email: {{ $content['email'] }}</p>
    <p>from: {{ $content['name'] }}</p>
    <p>Subject : {{ $content['subject'] }} </p>
    <p> {{$content['message']}} </p>
    <p>this is the message</p>
  </body>
</html>
