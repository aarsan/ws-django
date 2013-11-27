from django.conf.urls import patterns, include, url

urlpatterns = patterns('',
    url(r'^$', 'outside.views.home', name='home'),
    url(r'^login/', 'outside.views.login', name='login'),
    url(r'^faq/', 'outside.views.faq', name='faq'),
    url(r'^contact/', 'outside.views.contact', name='contact'),
    url(r'^about/', 'outside.views.about', name='about'),
    url(r'^testimonials/', 'outside.views.testimonials', name='testimonials'),
    url(r'^terms/', 'outside.views.terms', name='terms'),
    url(r'^privacy/', 'outside.views.privacy', name='privacy'),
    url(r'^press/', 'outside.views.press', name='press'),
)