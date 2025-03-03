#!/usr/bin/env python3
import cgi
print("Content-type: text/html\n\n")
print("<html><body><h1>Registration</h1>\n")
print("<p>The following registration is receieved:</p>\n")

form = cgi.FieldStorage()
name = form.getvalue('name') or ""
email = form.getvalue('email') or ""
certificate = form.getvalue('certificate') or ""

print("""<table>
<tr><th align="right">First and last name:</th>
<td>""" + name + """</td></tr>
<tr><th align="right">Email:</th>
<td>""" + email + """</td></tr>
<tr><th align="right">Certificate (DB, HI, DS):</th>
<td>""" + certificate + """</td></tr>
<tr><td align="center" colspan="2">
<a href="index-py.html">Back to Registration Page</a></td>
</tr>
</table>
""")
print("</body></html>")

