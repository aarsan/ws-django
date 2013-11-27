from django.conf.urls import patterns, include, url

from django.contrib import admin
admin.autodiscover()

urlpatterns = patterns('',
    # Examples:
    # url(r'^blog/', include('blog.urls')),
    url(r'^$', 'watershed.views.home', name='home'),
    url(r'^login/', 'watershed.views.login', name='login'),
    url(r'^faq/', 'watershed.views.faq', name='faq'),
    url(r'^contact/', 'watershed.views.contact', name='contact'),
    url(r'^about/', 'watershed.views.about', name='about'),
    url(r'^testimonials/', 'watershed.views.testimonials', name='testimonials'),
    url(r'^terms/', 'watershed.views.terms', name='terms'),
    url(r'^privacy/', 'watershed.views.privacy', name='privacy'),
    url(r'^press/', 'watershed.views.press', name='press'),
    url(r'^admin/', include(admin.site.urls)),
)
