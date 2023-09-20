from django.urls import path
from . import views

urlpatterns = [
    path('http://127.0.0.1:8000/', views.homepage, name='homepage'),
    # Add more URL patterns for other views as needed
]
