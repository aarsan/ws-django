from django.shortcuts import render, redirect

def home(request):
    title = "City Corner Blog"
    context = {'title': title}
    return render(request, 'home.html', context)
