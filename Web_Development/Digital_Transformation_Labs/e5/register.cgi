#!/usr/bin/perl
use CGI qw/:standard/;
print header;
print "<html><body><h1>Registration</h1>\n";
print "<p>The following registration is received:\n";
$name = param('name'); $email = param('email'); $certificate = param('certificate');
print <<"EOT";
<table>
<tr><th align=right>First and last name:</th><td>$name</td></tr>
<tr><th align=right>Email:</th><td>$email</td><tr>
<tr><th>Certificate (DB,HI,DS):</td><td>$certificate</td></tr><tr><td align=center colspan>
<a href="index.html">Back to Registration Page</a></td>
EOT
