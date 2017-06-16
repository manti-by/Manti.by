from django.conf import settings
from django.utils.translation import ugettext_lazy as _

from blog.models import Post
from taggit.models import Tag
from core.utils import get_instagram_photos


def global_template_vars(request):
    return {
        'DEBUG': settings.DEBUG,
        'ACTIVE_LANGUAGE': request.LANGUAGE_CODE,
        'LANGUAGES': settings.LANGUAGES,
        'ABSOLUTE_URL': request.build_absolute_uri(),
        'META_TITLE': _(settings.META_TITLE),
        'META_DESCRIPTION': _(settings.META_DESCRIPTION),
        'BASE_URL': settings.BASE_URL,
        'user': request.user,
        'tags': Tag.objects.all()[:10],
        'posts': Post.objects.all()[:10],
        'instagram_photos': get_instagram_photos()
    }
