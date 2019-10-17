from django.http import HttpResponse
from apps.sampleresponse.models import user_details_1,voters,admin
from apps.sampleresponse.user_management import RegistrationForm,LoginForm,voting_form,admin_LoginForm,voters_list
from django.views.decorators.csrf import csrf_exempt
import logging
import json
from pprint import pprint
# Create your views here.
LOGGER = logging.getLogger("website.apps.sampleresponse.views")
@csrf_exempt
def signup(request):
	form = RegistrationForm(request.POST)
	if form.is_valid():
		data = form.cleaned_data
		created = user_details_1.objects.get_or_create(first_name=data['first_name'],last_name=data['last_name'],email=data['email'],password=data['password'])
		print(created[1])
		if created[1]:
			return HttpResponse("Signup success")
		else:
			return HttpResponse("You have already registered with this email")
@csrf_exempt
def login(request):	
	form = admin_LoginForm(request.POST)
	login_user = False
	if form.is_valid():
	    data = form.cleaned_data
	    login_user = verify_user(data)
	    if login_user:
	    	return HttpResponse("Success")
	    else:
	        return HttpResponse("Failed")
@csrf_exempt
def admin_login(request):	
	form = LoginForm(request.POST)
	login_user = False
	if form.is_valid():
	    data = form.cleaned_data
	    login_user = admin_verify_user(data)
	    if login_user:
	    	return HttpResponse("loginSuccess")
	    else:
	        return HttpResponse("loginFailed")	 
def admin_verify_user(data):
    status = False
    try:
        login = admin.objects.get(email=data['email'],password=data['password'])
        status = True
    except:
        LOGGER.info("No entry for email : %s"%(data['email']))
    return status	               
def verify_user(data):
    status = False
    try:
        login = user_details_1.objects.get(email=data['email'],password=data['password'])
        status = True
    except:
        LOGGER.info("No entry for email : %s"%(data['email']))
    return status
@csrf_exempt
def voters_list(request):
	Voters_data = voters.objects.all().values()
	a=[]
	for i in Voters_data:
		a.append(i['voter_name']+',')
	return HttpResponse(a)
@csrf_exempt
def vote(request):
	form = voting_form(request.POST)
	if form.is_valid():
		data = form.cleaned_data
		current_votes = voters.objects.filter(voter_name=data['voter_name']).values()
		for i in current_votes :
			no_of_votes=i['no_of_votes']
			updated=voters.objects.filter(voter_name=data['voter_name']).update( no_of_votes= no_of_votes+1)
			updated_1=user_details_1.objects.filter(email=data['email']).update( voted= data['voter_name'])
		return HttpResponse("VotedSuccessfully")
@csrf_exempt
def admin_board(request):
	Voters_data = voters.objects.all().values()
	return HttpResponse(Voters_data)
#@csrf_exempt
#def find_voters(request):
	#form = voters_list(request.POST)
	#if form.is_valid():
#		data = form.cleaned_data
#	    voters=user_details_1.objects.filter(voted=data['voter_name'])
	    #if voters:
 	    #    return HttpResponse(voters)





