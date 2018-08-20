from django.db import models

# Create your models here.
class user_details_1(models.Model):
    first_name = models.CharField(max_length=64, null=True)
    last_name = models.CharField(max_length=64, null=True)
    email = models.CharField(max_length=64,null=False,primary_key=True)
    password = models.CharField(max_length=64, null=False)
    voted = models.CharField(max_length=64, null=False,default ='')

class voters(models.Model):
    voter_name = models.CharField(max_length=64, null=True)
    no_of_votes = models.IntegerField(null='0')  
class admin(models.Model):
    email = models.CharField(max_length=64,null=False,primary_key=True)
    password = models.CharField(max_length=64, null=False)
         

