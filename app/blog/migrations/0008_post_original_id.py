# -*- coding: utf-8 -*-
# Generated by Django 1.10.7 on 2017-05-02 15:10
from __future__ import unicode_literals

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('blog', '0007_post_viewed'),
    ]

    operations = [
        migrations.AddField(
            model_name='post',
            name='original_id',
            field=models.IntegerField(blank=True, default=0),
        ),
    ]
