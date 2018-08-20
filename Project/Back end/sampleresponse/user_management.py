from django import forms
class RegistrationForm(forms.Form):
    first_name = forms.CharField(max_length=64)
    last_name = forms.CharField(max_length=64)
    email = forms.CharField(max_length=64)
    password = forms.CharField(max_length=64)
class LoginForm(forms.Form):
    email = forms.CharField(max_length=64)
    password = forms.CharField(max_length=64)
class admin_LoginForm(forms.Form):
    email = forms.CharField(max_length=64)
    password = forms.CharField(max_length=64)    
class voting_form(forms.Form):
    voter_name = forms.CharField(max_length=64)
    email = forms.CharField(max_length=64)
class voters_list(forms.Form):
    email = forms.CharField(max_length=64)

