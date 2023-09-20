from django.shortcuts import render

def homepage(request):
    return render(request, 'swoc_app/homepage.html')
