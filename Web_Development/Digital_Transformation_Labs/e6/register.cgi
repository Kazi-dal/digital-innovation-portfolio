#!/usr/bin/perl
use CGI qw/:standard/;
print header;
print "<html><body><h1>Registration</h1>\n";
print "<p>The following registration is received:\n";
$name = param('name'); $email = param('email'); $certificate = param('certificate');

&save_registration($name, $email, $certificate);

print <<"EOT";
<table>
<tr><th align=right>First and last name:</th><td>$name</td></tr>
<tr><th align=right>Email:</th><td>$email</td><tr>
<tr><th>Certificate (DB,HI,DS):</td><td>$certificate</td></tr><tr><td align=center colspan>
<a href="index.html">Back to Registration Page</a></td>
EOT


sub save_registration {
	my ($name, $email, $certificate) = @_;
	open (my $fh, ">>registration-saved.txt") or die;
	print $fh "\nname: $name\nemail: $email\n".
	"certificate: $certificate\n";
close($fh);
}
