from django.shortcuts import render, redirect

def login(request):
    title = "City Corner"
    context = {'title': title}
    return render(request, 'login.html', context)

def home(request):
    return redirect('/login')