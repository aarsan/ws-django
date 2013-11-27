from django.shortcuts import render, redirect

def home(request):
    return redirect('/login')

def login(request):
    title = "City Corner"
    context = {'title': title}
    return render(request, 'login.html', context)

def faq(request):
    title = "City Corner"
    context = {'title': title}
    return render(request, 'faq.html', context)

def contact(request):
    title = "City Corner"
    context = {'title': title}
    return render(request, 'contact.html', context)

def about(request):
    title = "City Corner"
    context = {'title': title}
    return render(request, 'about.html', context)

def testimonials(request):
    title = "City Corner"
    context = {'title': title}
    return render(request, 'testimonials.html', context)

def terms(request):
    title = "City Corner"
    context = {'title': title}
    return render(request, 'terms.html', context)

def privacy(request):
    title = "City Corner"
    context = {'title': title}
    return render(request, 'privacy.html', context)

def press(request):
    title = "City Corner"
    context = {'title': title}
    return render(request, 'press.html', context)